<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix'=>'/', 'namespace'=>'User'], function (){
    Route::get('/', ['as'=>'getHomePage', 'uses'=>'HomeController@getHomePage']);
    Route::post('/', ['as'=>'postHomePage', 'uses'=>'HomeController@postHomePage']);
    Route::get('thi-truc-tuyen/{id}', ['as'=>'getQuestion' ,'uses'=>'QuestionController@getQuestion']);
    Route::post('thi-truc-tuyen/{id}', ['as'=>'postQuestion' ,'uses'=>'QuestionController@postQuestion']);
    Route::get('ket-qua-lam-bai', ['as'=>'getResult', 'uses'=>'QuestionController@getResult']);
    Route::post('folow', ['as'=>'postFolow', 'uses'=>'HomeController@postFolow']);
});

Route::get('test', function (){
    return view('user.pages.exam');
});

Route::get('uet-login', ['as'=>'getLogin', 'uses'=>'LoginController@getLogin']);
Route::post('uet-login', ['as'=>'postLogin', 'uses'=>'LoginController@postLogin']);
Route::get('logout', ['as'=>'getLogout', 'uses'=>'LoginController@getLogout']);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'uet-admin', 'namespace'=>'Admin'], function (){
        Route::get('/', ['as'=>'getMainAdminPage', function (){
            $totalUsers = DB::table('uet_users')->count();
            $totalSubjects = DB::table('uet_subjects')->count();
            $totalTests = DB::table('uet_tests')->count();
            $totalQuestions = DB::table('uet_questions')->count();
            $totalFeedbacks = DB::table('uet_feedbacks')->count();
            $totalFolows = DB::table('uet_follows')->count();
            return view('admin.module.dashboard.main', ['totalUsers'=>$totalUsers, 'totalSubjects'=>$totalSubjects, 'totalTests'=>$totalTests, 'totalQuestions'=>$totalQuestions, 'totalFeedbacks'=>$totalFeedbacks, 'totalFolows'=>$totalFolows]);
        }]);

        Route::group(['prefix'=>'users'], function (){
            Route::get('add', ['as'=>'getUserAdd', 'uses'=>'UserController@getUserAdd']);
            Route::post('add', ['as'=>'postUserAdd', 'uses'=>'UserController@postUserAdd']);
            Route::get('list', ['as'=>'getUserList', 'uses'=>'UserController@getUserList']);
            Route::get('delete/{id}', ['as'=>'getUserDel', 'uses'=>'UserController@getUserDel'])->where('id', '[0-9]+');
            Route::get('edit/{id}', ['as'=>'getUserEdit', 'uses'=>'UserController@getUserEdit'])->where('id', '[0-9]+');
            Route::post('edit/{id}', ['as'=>'postUserEdit', 'uses'=>'UserController@postUserEdit'])->where('id', '[0-9]+');
        });

        Route::group(['prefix'=>'subjects'], function (){
            Route::get('add', ['as'=>'getSubjectAdd', 'uses'=>'SubjectController@getSubjectAdd']);
            Route::post('add', ['as'=>'postSubjectAdd', 'uses'=>'SubjectController@postSubjectAdd']);
            Route::get('list', ['as'=>'getSubjectList', 'uses'=>'SubjectController@getSubjectList']);
            Route::get('delete/{id}', ['as'=>'getSubjectDel', 'uses'=>'SubjectController@getSubjectDel'])->where('id', '[0-9]+');
            Route::get('edit/{id}', ['as'=>'getSubjectEdit', 'uses'=>'SubjectController@getSubjectEdit'])->where('id', '[0-9]+');
            Route::post('edit/{id}', ['as'=>'postSubjectEdit', 'uses'=>'SubjectController@postSubjectEdit'])->where('id', '[0-9]+');
        });

        Route::group(['prefix'=>'tests'], function (){
            Route::get('add', ['as'=>'getTestAdd', 'uses'=>'TestController@getTestAdd']);
            Route::post('add', ['as'=>'postTestAdd', 'uses'=>'TestController@postTestAdd']);
            Route::get('list', ['as'=>'getTestList', 'uses'=>'TestController@getTestList']);
            Route::get('delete/{id}', ['as'=>'getTestDel', 'uses'=>'TestController@getTestDel'])->where('id', '[0-9]+');
            Route::get('edit/{id}', ['as'=>'getTestEdit', 'uses'=>'TestController@getTestEdit'])->where('id', '[0-9]+');
            Route::post('edit/{id}', ['as'=>'postTestEdit', 'uses'=>'TestController@postTestEdit'])->where('id', '[0-9]+');
        });

        Route::group(['prefix'=>'questions'], function (){
            Route::get('add', ['as'=>'getQuestionAdd', 'uses'=>'QuestionController@getQuestionAdd']);
            Route::post('add', ['as'=>'postQuestionAdd', 'uses'=>'QuestionController@postQuestionAdd']);
            Route::get('list/{id}', ['as'=>'getQuestionList', 'uses'=>'QuestionController@getQuestionList']);
            Route::get('delete/{id}', ['as'=>'getQuestionDel', 'uses'=>'QuestionController@getQuestionDel'])->where('id', '[0-9]+');
            Route::get('edit/{id}', ['as'=>'getQuestionEdit', 'uses'=>'QuestionController@getQuestionEdit'])->where('id', '[0-9]+');
            Route::post('edit/{id}', ['as'=>'postQuestionEdit', 'uses'=>'QuestionController@postQuestionEdit'])->where('id', '[0-9]+');
        });

        Route::group(['prefix'=>'feedbacks'], function (){
            Route::get('list', ['as'=>'getFeedBackList', 'uses'=>'FeedbackController@getFeedBackList']);
            Route::get('detail/{id}', ['as'=>'getFeedBackDetail', 'uses'=>'FeedbackController@getFeedBackDetail']);
        });

        Route::group(['prefix'=>'folows'], function (){
            Route::get('list', ['as'=>'getFollowList', 'uses'=>'FollowController@getFollowList']);
        });

        Route::group(['prefix'=>'folows'], function (){
            Route::get('list', ['as'=>'getFollowList', 'uses'=>'FollowController@getFollowList']);
        });
    });
});