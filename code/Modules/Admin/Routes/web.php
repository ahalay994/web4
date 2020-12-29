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

Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('/', 'AdminController@index')
        ->name('admin.index')
    ;

    /** Users */
    Route::any('/users/data', 'AdminUsersController@anyData')
        ->name('admin.users.data')
    ;
    Route::get('/users', 'AdminUsersController@index')
        ->name('admin.users.index')
    ;

    Route::get('/users/create', 'AdminUsersController@create')
        ->name('admin.users.create')
    ;
    Route::post('/users/save', 'AdminUsersController@save')
        ->name('admin.users.save')
    ;

    Route::get('/users/{id}/edit', 'AdminUsersController@edit')
        ->name('admin.users.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/users/{id}/update', 'AdminUsersController@update')
        ->name('admin.users.update')
        ->where('id', '\d+')
    ;

    Route::delete('/users/{id}/delete', 'AdminUsersController@destroy')
        ->name('admin.users.delete')
        ->where('id', '\d+')
    ;

    Route::get('/users/{id}/view', 'AdminUsersController@view')
        ->name('admin.users.view')
        ->where('id', '\d+')
    ;

    /** News */
    Route::any('/news/data', 'AdminNewsController@anyData')
        ->name('admin.news.data')
    ;
    Route::get('/news', 'AdminNewsController@index')
        ->name('admin.news.index')
    ;

    Route::get('/news/create', 'AdminNewsController@create')
        ->name('admin.news.create')
    ;
    Route::post('/news/save', 'AdminNewsController@save')
        ->name('admin.news.save')
    ;

    Route::get('/news/{id}/edit', 'AdminNewsController@edit')
        ->name('admin.news.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/news/{id}/update', 'AdminNewsController@update')
        ->name('admin.news.update')
        ->where('id', '\d+')
    ;

    Route::delete('/news/{id}/delete', 'AdminNewsController@destroy')
        ->name('admin.news.delete')
        ->where('id', '\d+')
    ;

    Route::get('/news/{id}/view', 'AdminNewsController@view')
        ->name('admin.news.view')
        ->where('id', '\d+')
    ;

    /** Gallery */
    Route::any('/gallery/data', 'AdminGalleryController@anyData')
        ->name('admin.gallery.data')
    ;
    Route::get('/gallery', 'AdminGalleryController@index')
        ->name('admin.gallery.index')
    ;

    Route::get('/gallery/create', 'AdminGalleryController@create')
        ->name('admin.gallery.create')
    ;
    Route::post('/gallery/save', 'AdminGalleryController@save')
        ->name('admin.gallery.save')
    ;

    Route::delete('/gallery/{id}/delete', 'AdminGalleryController@destroy')
        ->name('admin.gallery.delete')
        ->where('id', '\d+')
    ;

    /** Types */
    Route::any('/types/data', 'AdminTypesController@anyData')
        ->name('admin.types.data')
    ;
    Route::get('/types', 'AdminTypesController@index')
        ->name('admin.types.index')
    ;

    Route::get('/types/create', 'AdminTypesController@create')
        ->name('admin.types.create')
    ;
    Route::post('/types/save', 'AdminTypesController@save')
        ->name('admin.types.save')
    ;

    Route::get('/types/{id}/edit', 'AdminTypesController@edit')
        ->name('admin.types.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/types/{id}/update', 'AdminTypesController@update')
        ->name('admin.types.update')
        ->where('id', '\d+')
    ;

    Route::delete('/types/{id}/delete', 'AdminTypesController@destroy')
        ->name('admin.types.delete')
        ->where('id', '\d+')
    ;

    Route::get('/types/{id}/view', 'AdminTypesController@view')
        ->name('admin.types.view')
        ->where('id', '\d+')
    ;

    /** Teams */
    Route::any('/teams/data', 'AdminTeamsController@anyData')
        ->name('admin.teams.data')
    ;
    Route::get('/teams', 'AdminTeamsController@index')
        ->name('admin.teams.index')
    ;

    Route::get('/teams/create', 'AdminTeamsController@create')
        ->name('admin.teams.create')
    ;
    Route::post('/teams/save', 'AdminTeamsController@save')
        ->name('admin.teams.save')
    ;

    Route::get('/teams/{id}/edit', 'AdminTeamsController@edit')
        ->name('admin.teams.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/teams/{id}/update', 'AdminTeamsController@update')
        ->name('admin.teams.update')
        ->where('id', '\d+')
    ;

    Route::delete('/teams/{id}/delete', 'AdminTeamsController@destroy')
        ->name('admin.teams.delete')
        ->where('id', '\d+')
    ;

    Route::get('/teams/{id}/view', 'AdminTeamsController@view')
        ->name('admin.teams.view')
        ->where('id', '\d+')
    ;

    Route::any('/teams/{id}/gallery/data', 'AdminTeamsController@anyDataGallery')
        ->name('admin.teams.gallery.data')
        ->where('id', '\d+')
    ;

    Route::get('/teams/{id}/gallery', 'AdminTeamsController@gallery')
        ->name('admin.teams.gallery')
        ->where('id', '\d+')
    ;

    Route::get('/teams/{id}/gallery/create', 'AdminTeamsController@createGallery')
        ->name('admin.teams.gallery.create')
        ->where('id', '\d+')
    ;
    Route::post('/teams/{id}/gallery/save', 'AdminTeamsController@saveGallery')
        ->name('admin.teams.gallery.save')
        ->where('id', '\d+')
    ;

    Route::delete('/teams/{id}/gallery/{id_img}/delete', 'AdminTeamsController@destroyGallery')
        ->name('admin.teams.gallery.delete')
        ->where('id', '\d+')
        ->where('id_img', '\d+')
    ;

    /** Slider */
    Route::any('/slider/data', 'AdminSliderController@anyData')
        ->name('admin.slider.data')
    ;
    Route::get('/slider', 'AdminSliderController@index')
        ->name('admin.slider.index')
    ;

    Route::get('/slider/create', 'AdminSliderController@create')
        ->name('admin.slider.create')
    ;
    Route::post('/slider/save', 'AdminSliderController@save')
        ->name('admin.slider.save')
    ;

    Route::delete('/slider/{id}/delete', 'AdminSliderController@destroy')
        ->name('admin.slider.delete')
        ->where('id', '\d+')
    ;

    /** Menu */
    Route::any('/menu/data', 'AdminMenuController@anyData')
        ->name('admin.menu.data')
    ;
    Route::get('/menu', 'AdminMenuController@index')
        ->name('admin.menu.index')
    ;

    Route::get('/menu/create', 'AdminMenuController@create')
        ->name('admin.menu.create')
    ;
    Route::post('/menu/save', 'AdminMenuController@save')
        ->name('admin.menu.save')
    ;

    Route::get('/menu/{id}/edit', 'AdminMenuController@edit')
        ->name('admin.menu.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/menu/{id}/update', 'AdminMenuController@update')
        ->name('admin.menu.update')
        ->where('id', '\d+')
    ;

    Route::delete('/menu/{id}/delete', 'AdminMenuController@destroy')
        ->name('admin.menu.delete')
        ->where('id', '\d+')
    ;

    Route::get('/menu/{id}/view', 'AdminMenuController@view')
        ->name('admin.menu.view')
        ->where('id', '\d+')
    ;

    /** Settings */
    Route::any('/settings/data', 'AdminSettingsController@anyData')
        ->name('admin.settings.data')
    ;
    Route::get('/settings', 'AdminSettingsController@index')
        ->name('admin.settings.index')
    ;

    Route::get('/settings/create', 'AdminSettingsController@create')
        ->name('admin.settings.create')
    ;
    Route::post('/settings/save', 'AdminSettingsController@save')
        ->name('admin.settings.save')
    ;

    Route::get('/settings/{id}/edit', 'AdminSettingsController@edit')
        ->name('admin.settings.edit')
        ->where('id', '\d+')
    ;
    Route::patch('/settings/{id}/update', 'AdminSettingsController@update')
        ->name('admin.settings.update')
        ->where('id', '\d+')
    ;

    Route::delete('/settings/{id}/delete', 'AdminSettingsController@destroy')
        ->name('admin.settings.delete')
        ->where('id', '\d+')
    ;
});
