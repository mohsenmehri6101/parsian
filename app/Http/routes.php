<?php

Route::get('/','HomeController@index');

Route::group(['prefix'=>'admin'],function(){
        Route::resource('/agent','AgentController');//agent
        Route::resource('/news','NewsController');//news-ofno
        Route::resource('/fani','FaniController');//fani      اطلاعات فنی
        Route::resource('/cv_','Cv_Controller');//CV_   رزومه کتبی
        Route::resource('short','ShortController');//خلاصه وضعیت
        Route::resource('/cv','CvController');//CV//رزومه
        Route::resource('/users','UserController');//CV//رزومه
        Route::resource('img','');//CV
        Route::get('/',function ()
        {
        return view('admin.index');
        });
});

Route::auth();

Route::get('/home', 'HomeController@index');