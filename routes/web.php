<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontpart
Route::resource('/','Frontend\FxHomeController');
Route::resource('fxarticle','Frontend\FrontArticleController');
Route::resource('fxquestion','Frontend\FxQuestionController');
//Route::resource('brokerreviewresource','Frontend\BrokerReviewController');
Route::get('allbrokers','Frontend\BrokerReviewController@index');
Route::get('summary/{id}','Frontend\BrokerReviewController@summarydata');

Route::post('store-broker','Frontend\BrokerReviewController@store');
Route::get('/show-broker/{id}','Frontend\BrokerReviewController@show');
//Route::get('/brokerexpand/','Frontend\BrokerReviewController@create');




Route::get('/brokerlist','Frontend\BrokerReviewController@brokerlist');
Route::get('/brokerlist/{id}','Frontend\BrokerReviewController@changestatus');
Route::get('/brokerlistdeact/{id}','Frontend\BrokerReviewController@deactivebroker');
Route::get('/showbroker/{id}','Frontend\BrokerReviewController@showbroker');
Route::patch('/updatebroker/{id}','Frontend\BrokerReviewController@updatebroker');
Route::delete('deletebroker/{id}','Frontend\BrokerReviewController@destroy');
Route::post('softdeletebroker/{id}','Frontend\BrokerReviewController@softdelete');
Route::get('Trash/','Frontend\BrokerReviewController@showtrash');
Route::post('restore/{id}','Frontend\BrokerReviewController@restorebroker');

Route::get('/addreview/{id}','Frontend\BrokerReviewController@reviewadd');
Route::post('/storereview/{id}','Frontend\BrokerReviewController@reviewstore');

Route::get('/addprocon/{id}','Frontend\BrokerReviewController@proconadd');
Route::post('/storeprocon/{id}','Frontend\BrokerReviewController@storeprocon');

Route::get('/addvideo/{id}','Frontend\BrokerReviewController@videoadd');
Route::post('/storevideo/{id}','Frontend\BrokerReviewController@videostoe');
Route::get('/editvideo/{id}','Frontend\BrokerReviewController@editvideo');
Route::post('/videoupdate/{id}','Frontend\BrokerReviewController@updatevideo');
Route::get('/updaterank/{id}/{rank}','Frontend\BrokerReviewController@rankupdate');


Route::get('/singlecourse/{crsid}','Frontend\FxHomeController@coursebyid');
Route::get('/test','Frontend\TestController@index');
Route::get('/test/{id}','Frontend\TestController@show');
Route::get('/fxanaysis','Frontend\FrontAnalysisController@index');
Route::get('/fxanaysis/{id}','Frontend\FrontAnalysisController@show');
Route::get('/contact/','Frontend\ContactController@index');
Route::post('/contact/','Frontend\ContactController@store');

Route::get('/social/facebook/', 'Frontend\SocialController@redirectToProvider');
Route::get('/social/facebook/callback/', 'Frontend\SocialController@handleProviderCallback');
Route::post('/social/store', 'Frontend\SocialController@store');
Route::post('/social/reviewstore/', 'Frontend\SocialController@storereview');
Route::post('/like/{id}/act', 'Frontend\SocialController@actOnChirp');
Route::post('/social/storearticle/', 'Frontend\SocialController@storearticle');
Route::get('/social/linkedin/', 'Frontend\SociallinkController@redirectToLinkedin');
Route::get('/social/linkedin/callback/', 'Frontend\SociallinkController@handleLinkedinCallback');


Auth::routes();
//Admin Pannel
Route::get('/admin-panel', 'HomeController@index')->name('home');
Route::resource('category','Admin\CategoryController');
Route::resource('question','Admin\QuestionController');
Route::resource('course','Admin\CourseController');
Route::post('softdeletecourse/{id}','Admin\CourseController@softdelete');
Route::post('restorecourse/{id}','Admin\CourseController@restorecourse');
Route::get('coursetrash/','Admin\CourseController@showtrash');
Route::resource('article','Admin\ArticleController');
Route::post('softdelarticle/{id}','Admin\ArticleController@softdelete');
Route::get('articletrash','Admin\ArticleController@showtrash');
Route::post('restorearticle/{id}','Admin\ArticleController@restorearticle');
Route::resource('analysis','Admin\AnalysisController');
Route::post('softdelanalysis/{id}','Admin\AnalysisController@softdelete');
Route::post('restoreanalysis/{id}','Admin\AnalysisController@restoreanalysis');
Route::get('analysistrash','Admin\AnalysisController@showtrash');
Route::get('/catbyid/{id}', 'Admin\CategoryController@edit');
Route::resource('message','Admin\MessageController');
Route::get('/singlemsg/{id}','Admin\MessageController@show');
Route::resource('Press_Release','Admin\RecentPressReleaseController');
Route::resource('advertisement','Admin\AdvertisementController');