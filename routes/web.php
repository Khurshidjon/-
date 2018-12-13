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
use Illuminate\Support\Facades\Route;

Route::get('_/{lang}', function ($lang) {
    \Session::put('lang', $lang);
    return redirect()->back();
})->name('locale');

Route::get('/', 'StandartController@index')->name('frontIndex');
Route::get('/about-us', 'StandartController@aboutUs')->name('frontAboutUs');
Route::get('/adm-contact', 'StandartController@admContact')->name('frontAdmContact');
Route::get('/adm-single', 'StandartController@admSingle')->name('frontAdmSingle');
Route::get('/adm-structure', 'StandartController@admStructure')->name('frontAdmStructure');
Route::get('/administration', 'StandartController@adminstration')->name('frontAdminsitration');
Route::get('/apparat', 'StandartController@apparat')->name('frontCenterApparat');
Route::get('/documents', 'StandartController@documents')->name('frontDocuments');
Route::get('/faq', 'StandartController@FAQ')->name('frontFAQ');
Route::get('/faq-post', 'StandartController@faqPost')->name('frontFaqPost');
Route::get('/feedback', 'StandartController@feedback')->name('frontFeedback');
Route::get('/gallery', 'StandartController@gallery')->name('frontGallery');
Route::get('/laws', 'StandartController@laws')->name('frontLaws');
Route::get('/leadership', 'StandartController@leadership')->name('frontLeadership');
Route::get('/metrology', 'StandartController@metrology')->name('frontMetrology');
Route::get('/news', 'StandartController@news')->name('frontNews');
Route::get('/news/load-more', 'StandartController@loadMoreNews')->name('frontLoadMoreNews');
Route::get('/news-single/{id}', 'StandartController@newsSingle')->name('frontNewsSingle');
Route::get('/like/news', 'StandartController@likeNews')->name('like.news');
Route::get('/open-data-single', 'StandartController@openDataSingle')->name('frontOpenDataSingle');
Route::get('/opening-data', 'StandartController@openingData')->name('frontOpeningData');
Route::get('/photo-gallery', 'StandartController@photoGallery')->name('frontPhotoGallery');
Route::get('/press-service', 'StandartController@pressService')->name('frontPressService');
Route::get('/tender', 'StandartController@tender')->name('frontTender');
Route::get('/vacancy', 'StandartController@vacancy')->name('frontVacancy');
Route::get('/vacancy-single', 'StandartController@vacancySingle')->name('frontVacancySingle');
Route::get('/video-blog', 'StandartController@videoBlog')->name('frontVideoBlog');
Route::get('/work-days', 'StandartController@workDays')->name('frontWorkDays');
Route::get('/service/voice', 'StandartController@serviceVoice')->name('service.voice');
Route::get('/voice/service', 'StandartController@voiceService')->name('voice.service');
//\Phongvh\SpeechGen\SpeechGen::routes();









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/worker', 'AdminController@workersIndex')->name('worker.index');
    Route::get('/worker/{worker}', 'AdminController@workerView')->name('worker.view');
    Route::get('/create/worker', 'AdminController@workerCreat')->name('add.worker');
    Route::post('/worker/create', 'AdminController@workerStore')->name('create.worker');
    Route::get('/rank', 'AdminController@ranksIndex')->name('rank.index');
    Route::get('/rank/{rank}', 'AdminController@rankView')->name('rank.view');
    Route::get('/rank/create', 'AdminController@rankCreat')->name('add.rank');
    Route::post('/rank/create', 'AdminController@rankStore')->name('create.rank');
    Route::get('/organ', 'AdminController@organsIndex')->name('organ.index');
    Route::get('/organ/{organ}', 'AdminController@organView')->name('organ.view');
    Route::get('/create/organ', 'AdminController@organCreat')->name('add.organ');
    Route::post('/create/organ', 'AdminController@organStore')->name('create.organ');
    Route::get('/post', 'AdminController@postsIndex')->name('post.index');
    Route::get('/post/{post}', 'AdminController@postView')->name('post.view');
    Route::get('/create/post', 'AdminController@newsCreat')->name('add.post');
    Route::post('/organ/create', 'AdminController@newsStore')->name('create.post');
    Route::delete('/organ/{organ}/delete', 'AdminController@organRemove')->name('delete.organ');
    Route::delete('/worker/{worker}/delete', 'AdminController@workerRemove')->name('delete.worker');
    Route::delete('/rank/{rank}/delete', 'AdminController@rankRemove')->name('delete.rank');
    Route::delete('/post/{post}/delete', 'AdminController@postRemove')->name('delete.post');

    Route::get('check/slug', 'AdminController@checkSlug')->name('checkSlug');
});
