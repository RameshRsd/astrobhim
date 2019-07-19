<?php

Route::group(['namespace'=>'client'],function (){
   Route::any('/','ApplicationController@index');
    Route::any('contact','ApplicationController@contact')->name('contact');
    Route::any('Gallery','ApplicationController@Gallery')->name('Gallery');
    Route::any('DateConvertor','ApplicationController@DateConvertor')->name('DateConvertor');
    Route::any('Blogs','ApplicationController@Blogs')->name('Blogs');
    Route::any('Services','ApplicationController@Services')->name('Services');
    Route::any('Horoscope','ApplicationController@Horoscope')->name('Horoscope');
    Route::any('Search','ApplicationController@Search')->name('Search');
    Route::any('About','ApplicationController@About')->name('About');
    Route::any('aboutAstrology','ApplicationController@aboutAstrology')->name('aboutAstrology');
    Route::any('aboutYoga','ApplicationController@aboutYoga')->name('aboutYoga');
    Route::any('aboutSpa','ApplicationController@aboutSpa')->name('aboutSpa');
    Route::any('aboutMeditation','ApplicationController@aboutMeditation')->name('aboutMeditation');
    Route::any('Profile','ApplicationController@Profile')->name('Profile');
    Route::any('application_form','ApplicationController@application')->name('application_form');
    Route::get('Blogs/{id}/{slugs}','ApplicationController@BlogDetails')->name('BlogDetails');
    Route::any('OnGoingProject','ApplicationController@OnGoingProject')->name('OnGoingProject');
    Route::any('CompletedProject','ApplicationController@CompletedProject')->name('CompletedProject');
    Route::any('commentPost','ApplicationController@commentPost')->name('commentPost');

});


Route::group(['namespace'=>'server'],function (){
    Route::any('login','UserController@login')->name('login');
//    Route::any('signup','UserController@signup')->name('signup');
    Route::get('addAbout/{id}/editMission','FrontMenuController@editMission')->name('editMission');
    Route::post('addAbout/{id}/editMission','FrontMenuController@updateMission');

    Route::get('addAbout/{id}/editIntro','FrontMenuController@editIntro')->name('editIntro');
    Route::post('addAbout/{id}/editIntro','FrontMenuController@updateIntro');

    Route::get('addAbout/{id}/editIntro','FrontMenuController@editIntro')->name('editIntro');
    Route::post('addAbout/{id}/editIntro','FrontMenuController@updateIntro');

    Route::get('pages/{id}/editPage','FrontMenuController@editPage')->name('editPage');
    Route::post('pages/{id}/editPage','FrontMenuController@updatePage');

    Route::get('addGallery/{id}/editGallery','GalleryController@editSlide')->name('editGallery');
    Route::post('addGallery/{id}/editGallery','GalleryController@updateSlide');
    Route::get('addGallery/delete/{id}','GalleryController@destroy');

    Route::get('addService/delete/{id}','ServiceController@destroy');
    Route::get('editService/edit/{id}','ServiceController@editService');
    Route::post('editService/edit/{id}','ServiceController@updateService');

    Route::get('addNews/delete/{id}','NewsController@destroy');
    Route::get('addNews/{id}/editNews','NewsController@editNews')->name('editNews');
    Route::post('addNews/{id}/editNews','NewsController@updateNews');

    Route::get('addUser/{id}/editUser','UserController@editUser')->name('editUser');
    Route::post('addUser/{id}/editUser','UserController@updateUser');
    Route::get('addUser/delete/{id}','UserController@destroy');
    Route::post('addUser/{id}/updateUserStatus','UserController@updateUserStatus');

    Route::get('viewCategories/{id}/editCategories','EnrollController@editCategories')->name('editCategories');
    Route::post('viewCategories/{id}/editCategories','EnrollController@updateCategories')->name('updateCategories');
//    Route::get('viewApplication/delete/{id}','EnrollController@destroy');


});
Route::group(['namespace'=>'server','prefix'=>'admin','middleware'=>'auth'],function (){
    Route::any('/','DashboardController@index')->name('admin');
    Route::post('introPost','DashboardController@introPost')->name('introPost');
    Route::post('introPostContact','DashboardController@introPostContact')->name('introPostContact');
    Route::group(['prefix'=>'User-Control','middleware'=>'status'],function (){
       Route::any('/','UserController@index')->name('users');
        Route::any('addUser','UserController@addUser')->name('addUser');
        Route::any('updateUser','UserController@updateUser')->name('updateUser');
    });

    Route::group(['prefix'=>'Gallery'],function (){

        Route::any('addGallery','GalleryController@addGallery')->name('addGallery');

    });
    Route::group(['prefix'=>'Front-Menu'],function (){

        Route::any('addAbout','FrontMenuController@addAbout')->name('addAbout');
        Route::any('otherPages','FrontMenuController@otherPages')->name('otherPages');

    });
    Route::group(['prefix'=>'News'],function (){

        Route::any('addNews','NewsController@addNews')->name('addNews');
    });
    Route::group(['prefix'=>'Service'],function (){

        Route::any('addService','ServiceController@addService')->name('addService');
    });
    Route::group(['prefix'=>'Categories'],function (){

        Route::any('viewCategories','EnrollController@viewCategories')->name('viewCategories');
    });

    Route::group(['prefix'=>'legalStatus'],function (){

        Route::any('legalStatus','legalStatusController@legalStatus')->name('legalStatus');
    });
    Route::group(['prefix'=>'JobApplicaton'],function (){

        Route::any('viewJobApplication','JobApplicationController@viewJobApplication')->name('viewJobApplication');
    });
    Route::group(['prefix'=>'viewJobDemand'],function (){

        Route::any('viewJobDemand','JobDemandController@viewJobDemand')->name('viewJobDemand');
    });
    Route::group(['prefix'=>'Contact'],function (){

        Route::any('viewContact','ContactController@viewContact')->name('viewContact');

    });
    Route::group(['prefix'=>'Report'],function (){

        Route::any('TrainingReport','ReportController@Report')->name('TrainingReport');
        Route::any('eventReport','ReportController@eventReport')->name('eventReport');
        Route::any('tradeReport','ReportController@tradeReport')->name('tradeReport');
        Route::any('venueReport','ReportController@venueReport')->name('venueReport');
    });
    Route::group(['prefix'=>'trainee'],function (){

        Route::any('addTrainee','TraineeController@addTrainee')->name('addTrainee');
        Route::any('viewTrainee','TraineeController@viewTrainee')->name('viewTrainee');
        Route::any('searchEvent','TraineeController@searchEvent')->name('searchEvent');
        Route::any('TraineeReport','TraineeController@searchEvent')->name('TraineeReport');
//        Route::post('searchData','DashboardController@searchData')->name('searchEvent');
//      Route::get('searchEvent','DashboardController@searchEvent')->name('searchEvent');

    });
    Route::any('logout','UserController@logout')->name('logout');

});