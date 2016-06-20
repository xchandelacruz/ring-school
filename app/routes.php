<?php
Route::get('/bubbles','ViewController@showanimation');
Route::get('/3-bubbles','ViewController@show_3_animation');

/* General */
Route::get('/home','ViewController@showRoot');


/* courses */
Route::get('/courselist','ViewController@showCourselist');
Route::get('/courselist/Gitdirector','ViewController@showGitdirectorCourselist');
Route::get('/courselist/Bridgese','ViewController@showBridgeseCourselist');
Route::get('/courselist/Programmer','ViewController@showProgrammerCourselist');
Route::get('/courselist/Designer','ViewController@showDesignerCourselist');
Route::get('/courselist/Internship','ViewController@showInternshipCourselist');


/* company-contact module */
Route::get('/company-contact','ViewController@getCompanyContact');
Route::post('company-contact/review','ViewController@showCompanyContact');
Route::get('company-contact/back','ViewController@returnCompanyContact');
Route::post('company-contact/submit','ViewController@postCompanyContact');


/* BLOG */
// Credintials
Route::get('/blog/register','BlogController@getRegister');
Route::get('/blog/logIn','BlogController@getLogIn');

Route::post('/blog/register/submit','BlogController@postRegister');
Route::post('/blog/logIn/submit','BlogController@postLogIn');


// viewing
Route::get('/blog/{id}/view','BlogController@viewBlog');

Route::get('/blog/{id}/view/comment','BlogController@shownocomment');

Route::get('/blog/category/{id}','BlogController@postcategory');

Route::get('/blog','BlogController@showBlogs');


/* Feedback */
Route::get('/feedback','FeedbackController@showFeedback');
Route::get('/feedback/view/{id}','FeedbackController@viewFeedback');


/* Log Out */
Route::get('/logout', function()
{
	Auth::logout();
	Session::flush();
	return Redirect::to('/blog');
});


Route::group(array('before' => 'auth'), function(){

/* BLOG */
// add edit delete
Route::get('/blog/addPost','BlogController@createBlog');
Route::post('blog/addPost/submit','BlogController@postBlog');

Route::get('/blog/deletePost/{id}','BlogController@deleteBlog');
Route::get('/blog/editPost/{id}','BlogController@getUpdateBlog');
Route::post('blog/editPost/submit','BlogController@postUpdateBlog');

// comment submit 
Route::post('blog/{id}/comment/submit','BlogController@postComment');

/* Feedback */
Route::get('/feedback/addPost','FeedbackController@createFeedback');
Route::post('feedback/addPost/submit','FeedbackController@postFeedback');


});


/*have error when logged in, redirecting to employees*/




/*
App::error(function($exception, $code)
{	$pathInfo = Request::getPathInfo();
$message = $exception->getMessage() ?: 'Exception';
Log::error("$code - $message @ $pathInfo\r\n$exception");
switch ($code)
{
case 403:
return Response::view('errors.403', array(), 403);

case 404:
return Response::view('error/404', array(), 404);

case 500:
return Response::view('error/500', array(), 500);

default:
return Response::view('errors.default', array(), $code);
}
});*/

