<?php

class FeedbackController extends \BaseController {




    public function createFeedback(){

        return View::make('Feedback.createPost');

    }


    public function postFeedback(){

            $file = Input::file('source_display');
//return var_dump($file);
            $rules = array(
                'title' => 'required',
                'source_display' => 'required',
                'source_source' => 'required',
                'body_about' => 'required',
                'subject_name' => 'required',
                'category' => 'required'
            );
            

            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {

                return View::make('Feedback.createPost')
                ->with('statusmessage', 'すべての入力を完了してください。')
                ->with('statussend', '0');

            } else {

                $testimonyarticle = new TestimonyArticle;
                $testimonyarticle->tesart_title = Input::get('title');

                $file_name = str_random(10).'.'.$file->getClientOriginalExtension();
                $file->move(base_path().'/uploads', $file_name);

                $testimonyarticle->tesart_source_dp = $file_name;
                $testimonyarticle->tesart_source = Input::get('source_source');
                $testimonyarticle->tesart_about = Input::get('body_about');
                $testimonyarticle->tesart_subject = Input::get('subject_name');
                $testimonyarticle->tesart_cat_details = Input::get('category');
                $testimonyarticle->save();


                return Redirect::to('/feedback')
                ->with('statussend', '1');
            }
    }

    public function showFeedback(){
        $feedbacks = DB::table('testimony_article')->get();

        return View::make('Feedback.feedbacks')
        ->with('feedbacks', $feedbacks);

    }        


    public function viewFeedback($tesart_id){

        $feedbacks = TestimonyArticle::find($tesart_id);

        return View::make('Feedback.show')
        ->with('feedbacks', $feedbacks);

    }      

    



}