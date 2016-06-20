<?php

class BlogController extends \BaseController {


    public function shownocomment($post_id){
        $posts = DB::table('posts')
        ->select('posts.post_id', 'posts.author_id', 'posts.post_title', 'posts.post_body', 'posts.created_at', 'users.user_name as username')
        ->leftJoin('users', 'posts.author_id', '=', 'users.user_id')
        ->where('posts.post_id', '=', $post_id)
        ->first();

        $comments = DB::table('comments')
        ->select('comments.comment_id', 'comments.from_user', 'comments.on_post', 'comments.comment_body', 'comments.created_at', 'users.user_name as username')
        ->leftJoin('users', 'comments.from_user', '=', 'users.user_id')
        ->where('comments.on_post', '=', $post_id)
        ->orderBy('comments.created_at','ASC')
        ->get();

        $categories = DB::table('category')
        ->select('category.cat_name', 'category.cat_id')
        ->leftJoin('categorypost_relation', 'category.cat_id', '=', 'categorypost_relation.cat_id')
        ->where('categorypost_relation.post_id', '=', $post_id)
        ->get();


        return View::make('Blog.blogComment')
        ->with('posts', $posts)
        ->with('categories', $categories)
        ->with('comments', $comments);


    }
    
    public function postcategory($cat_id){
        $category = DB::table('category')
        ->select('category.cat_name', 'category.cat_id')
        ->where('category.cat_id', '=', $cat_id)
        ->get();

        $posts = DB::table('posts')
        ->select('posts.post_id', 'posts.author_id', 'posts.post_title', 'posts.post_body', 'posts.created_at', 'users.user_name as username', 'comments.comment_id as commentId')
        ->leftJoin('users', 'posts.author_id', '=', 'users.user_id')        
        ->leftJoin('categorypost_relation', 'posts.post_id', '=', 'categorypost_relation.post_id')
        ->leftJoin('comments', 'posts.post_id', '=', 'comments.on_post')
        ->where('categorypost_relation.cat_id', '=', $cat_id)
        ->groupby('posts.post_id')        
        ->orderBy('posts.created_at','ASC')
        ->paginate(10);

//return $posts;

        return View::make('Blog.category')
        ->with('category', $category)
        ->with('posts', $posts);


    }

    public function viewBlog($post_id){

        $posts = DB::table('posts')
        ->select('posts.post_id', 'posts.author_id', 'posts.post_title', 'posts.post_body', 'posts.created_at', 'users.user_name as username')
        ->leftJoin('users', 'posts.author_id', '=', 'users.user_id')
        ->where('posts.post_id', '=', $post_id)
        ->first();

        $comments = DB::table('comments')
        ->select('comments.comment_id', 'comments.from_user', 'comments.on_post', 'comments.comment_body', 'comments.created_at', 'users.user_name as username')
        ->leftJoin('users', 'comments.from_user', '=', 'users.user_id')
        ->where('comments.on_post', '=', $post_id)
        ->orderBy('comments.created_at','ASC')
        ->get();

        $categories = DB::table('category')
        ->select('category.cat_name', 'category.cat_id')
        ->leftJoin('categorypost_relation', 'category.cat_id', '=', 'categorypost_relation.cat_id')
        ->where('categorypost_relation.post_id', '=', $post_id)
        ->get();


        return View::make('Blog.show')
        ->with('posts', $posts)
        ->with('categories', $categories)
        ->with('comments', $comments);


    }

    public function postComment(){

        $userId = Auth::id();
        $posId = Input::get('on_post');

            $comments = new Comments;
            $comments->on_post = $posId;
            $comments->from_user = $userId;
            $comments->comment_body = Input::get('comment');
            $comments->save();

            return Redirect::to('blog/'.$posId.'/view');

    }  


    public function showBlogs(){

        $posts = DB::table('posts')
        ->select('posts.post_id', 'posts.author_id', 'posts.post_title', 'posts.post_body', 'posts.created_at', 'users.user_name as username', 'comments.comment_id as commentId')
        ->leftJoin('users', 'posts.author_id', '=', 'users.user_id')
        ->leftJoin('comments', 'posts.post_id', '=', 'comments.on_post')
        ->groupby('posts.post_id')
        ->orderBy('posts.created_at','ASC')
        ->paginate(10);

        $recents = DB::table('posts')->orderBy('created_at', 'desc')->take(5)->get();

        $categories = DB::table('category')->get();

        //return $recents;

//return $categories;



        return View::make('Blog.blogs')
        ->with('posts', $posts)
        ->with('categories', $categories)
        ->with('recents', $recents);



    }

    public function createBlog(){

        $categories = DB::table('category')->get();
//return $posts;
        return View::make('Blog.createPost')
        ->with('categories', $categories);


    }

    public function getRegister(){
        return View::make('Blog.register');
    }    

    public function postRegister(){

            $users = new Users;
            $users->user_name = Input::get('name');
            $users->user_email = Input::get('email');
            $users->password = Hash::make(Input::get('password'));
            $users->user_role = '1';
            $users->save();

            return View::make('Blog.login');
    }       

    public function getLogIn(){
            return View::make('Blog.login');
    }    

    public function postLogIn(){

        $input = Input::all(); 


            $userdata = array(

                'user_email' =>$input['email'],
                'password'   => $input['password'],
            );

            // attempt to do the login
            if (Auth::attempt($userdata)){
                return Redirect::to('/blog');
                
            }else{
                return View::make('Blog.login')
                ->with('statusmessage', '無効なメールアドレスまたはパスワード');
            }
 
   
    }  


    public function postBlog(){

        if (Auth::check())
        {
            // Auth::user() returns an instance of the authenticated user...


            $categories = DB::table('category')->get();

            $rules = array(
                'title' => 'required',
                'body' => 'required'
            );
            
            //return $rules;

            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {
                /*return Redirect::to('/blog/addPost')*/
                return View::make('Blog.createPost')
                ->with('categories', $categories)
                ->with('statusmessage', 'すべての入力を完了してください。')
                ->with('statussend', '0');
                //->withInput();
            } else {
                $userId = Auth::id();

                $posts = new Posts;
                $posts->author_id = $userId;
                $posts->post_title = Input::get('title');
                $posts->post_body = Input::get('body');
                $posts->active = '1';
                $posts->save();

                    $getarray = Input::get('category');

                    $countArray = count($getarray);       

                    for($x = 0; $x < $countArray; $x++)
                    {

                        $post_test = DB::table('posts')->orderBy('post_id', 'desc')->take(1)->first();

                        $this_postId = $post_test->post_id;

                        $catRel = new CategoryPosts;
                        $catRel->post_id = $this_postId;
                        $catRel->cat_id = $getarray[$x];
                        $catRel->save();

                    }



                return View::make('Blog.createPost')
                ->with('categories', $categories)
                ->with('statusmessage', '正常に送信されました')
                ->with('statussend', '1');
                
            }

        }

    }     

    
    public function deleteBlog($post_id){

        if (Auth::check())
        {
            // Auth::user() returns an instance of the authenticated user...
            $post = Posts::find($post_id);
            $post->delete();

            $comments = Comments::where('on_post', '=', $post_id);
            //return $comments;
            $comments->delete();      

            return Redirect::to('/blog');
        }

    } 


    public function getUpdateBlog($post_id){

        if (Auth::check())
        {
            // Auth::user() returns an instance of the authenticated user...
            $posts = Posts::find($post_id);


/*            $relation = DB::table('categorypost_relation')
            ->where('categorypost_relation.post_id', '=', $post_id)
            ->get();


return $relation;*/


            $categories = DB::table('category')->get();

            $categories_relation = DB::table('categorypost_relation')
            ->where('post_id', '=', $post_id)
            ->get();
 

//return $posts;  
                return View::make('Blog.updatePost')
                ->with('categories_relation', $categories_relation)
                ->with('categories', $categories)
                ->with('posts', $posts);
        }

    }

    
    public function postUpdateBlog(){

        if (Auth::check())
        {
                    $post_id = Input::get('post_id');
                    $category_select = Input::get('category');
                    $category_all = Input::get('category-default');

                    $countArray = count($category_all);       

                    if(empty($category_select)){
                        $equal_val = array('0');
                    }else{
                        $equal_val = array_intersect($category_select, $category_all);
                    }

                        for($x = 0; $x < $countArray; $x++)
                        {

                            $categories_relation = DB::table('categorypost_relation')
                            ->where('post_id', '=', $post_id)
                            ->where('cat_id', '=', $category_all[$x])
                            ->get();

                                if(empty($categories_relation)){

                                    if (in_array($category_all[$x], $equal_val)) {
                                        
                                        $catRel = new CategoryPosts;
                                        $catRel->post_id = $post_id;
                                        $catRel->cat_id = $category_all[$x];
                                        $catRel->save();
                                    }

                                }else{

                                    if (in_array($category_all[$x], $equal_val)) {

                                    }else{

                                        $catRel = CategoryPosts::where('post_id', '=', $post_id)
                                        ->where('cat_id', '=', $category_all[$x]);
                        
                                        $catRel->delete();  
                                    }                                
                                }
                        }








/*            $posts = Posts::find($post_id);

            $categories = DB::table('category')->get();

            $categories_relation = DB::table('categorypost_relation')
            ->where('post_id', '=', $post_id)
            ->get();



            $rules = array(
                'title' => 'required',
                'body' => 'required'
            );

            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {

                return View::make('Blog.createPost')
                ->with('categories_relation', $categories_relation)
                ->with('categories', $categories)
                ->with('posts', $posts)
                ->with('statusmessage', 'すべての入力を完了してください。')
                ->with('statussend', '0');

            } else {
                $userId = Auth::id();

                $posts = new Posts;
                $posts->author_id = $userId;
                $posts->post_title = Input::get('title');
                $posts->post_body = Input::get('body');
                $posts->active = '1';
                $posts->save();

                    $getarray = Input::get('category');



                    $countArray = count($getarray);       

                    for($x = 0; $x < $countArray; $x++)
                    {

                            $check_data_if_existing = DB::table('posts')->orderBy('post_id', 'desc')->take(1)->first();


                            $categories_relation = DB::table('categorypost_relation')
                            ->where('post_id', '=', $post_id)
                            ->where('cat_id', '=', $post_id)
                            ->get();


                            $this_postId = $post_test->post_id;

                            $catRel = CategoryPosts::find($post_id);
                            $catRel->post_id = $this_postId;
                            $catRel->cat_id = $getarray[$x];
                            $catRel->save();

                    }



                return View::make('Blog.createPost')
                ->with('categories_relation', $categories_relation)
                ->with('categories', $categories)
                ->with('posts', $posts)
                ->with('statusmessage', '正常に送信されました')
                ->with('statussend', '1');
                
            }*/

        }

    }         



}