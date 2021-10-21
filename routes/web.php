<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\SocialController;
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

Route::get('/', function () {
    return view('index');
});
/**-----------------Index------------------------- */
Route::group(['namespace' => 'Template', ],function(){
    Route::get('index','HomeController@index')->name('index');
    Route::get('/about-us','AboutUsController@index')->name('about');
    Route::get('/contact-us','ContactController@index')->name('contact');
    Route::post('/contact-form','ContactController@store')->name('contact-form');

    Route::get('/invitations','InvitationController@index')->name('invitation');
    Route::get('/preview','PreviewController@index')->name('preview');    
    Route::get('/invi/birthday/{slug}','InvitationController@invite')->name('invite');
});

/**-----------------User Dashboard------------------------- */
Route::group(['namespace' => 'UserDash', 'prefix'=>'u', 'middleware' => ['auth','adminRedirect'] ],function(){
    Route::get('dashboard','UserDashboardController@index')->name('user-dashboard');

    Route::post('update-profile','ProfileController@update')->name('update-user-profile'); 

    Route::resource('/my-invitations','InvitationController');
});


/**-----------------Admin------------------------- */
Route::group(['namespace' => 'Admin', 'prefix'=>'iw', 'middleware'=>['auth','admin'] ],function(){
    
    Route::get('/dash','AdminDashboardController@index')->name('admin-dashboard');

    /**------------Users Route------------ */
    Route::get('/users','UsersController@index')->name('admin-users');
    Route::get('/user/{id}','UsersController@usersDetails')->name('admin-users-details');
    Route::delete('/user/{id}','UsersController@destroy')->name('admin-users-delete');
    Route::post('/search','SearchController@search')->name('admin-users-search');

    
    /**------------invitations Route------------ */
    Route::get('/all-invitations','InvitationsController@index')->name('admin-invitations');
    Route::get('/s/invit/{slug}','InvitationsController@SingleInvitation')->name('admin-single-invitation');
    
    /**------------Feedbcks------------ */
    Route::get('/feedbacks','FeedbacksController@index')->name('admin-feedbacks');
    Route::get('/feedback/{id}','FeedbacksController@feedback')->name('admin-feedback-details');

});

Route::get('link-storage', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('redirect', 'Auth\SocialController@redirect');
Route::get('callback', 'Auth\SocialController@callback');