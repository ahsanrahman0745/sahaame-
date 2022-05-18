<?php


use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Addlisting;
use App\Http\Livewire\UsersTable;
use App\Http\Livewire\TotalListing;
use App\Http\Livewire\ActiveClient;
use App\Http\Livewire\ActiveListing;
use App\Http\Livewire\ActiveUsers;
use App\Http\Livewire\Browser;
use App\Http\Livewire\CustomFields;
use App\Http\Livewire\Device;
use App\Http\Livewire\ManageListing;
use App\Http\Livewire\Rankbykeyword;
use App\Http\Livewire\Emaillive;
use App\Http\Livewire\ManageMedia;
use App\Http\Livewire\PendingListing;
use App\Http\Livewire\ReportedListing;
use App\Http\Livewire\ReportListing;
use App\Http\Livewire\Listingcategory;
use App\Http\Livewire\Review;
use App\Http\Livewire\Settings;
use App\Http\Livewire\TotalReviews;
use App\Http\Livewire\TotalSuggestion;
use App\Http\Livewire\UserStar;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;

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

//Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

//Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


Route::get('/listing',[App\Http\Controllers\ListingsController::class,'index']);
//Route::post('/listingstore',[App\Http\Controllers\ListingsController::class,'store']);



//Route::get('/search_business',[App\Http\Controllers\SearchBusiness::class,'index']);
Route::get('/searchbusiness',[App\Http\Controllers\BusinessesController::class,'index3']);
Route::post('/searchbusiness',[App\Http\Controllers\BusinessesController::class,'index3'])->name("searchlistingspage");


//Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'index'])->middleware('auth');
Route::get('/dashboard/listings',[App\Http\Controllers\BusinessesController::class,'tables'])->middleware('auth');

Route::post('/autocomplete/getAutocomplete/',[App\Http\Controllers\API\apibusinesses::class,'getAutocomplete'])->name('Autocomplte.getAutocomplte');
Route::post('/autocomplete/getAutocompletecity/',[App\Http\Controllers\API\apibusinesses::class,'getAutocompletecity'])->name('Autocomplte.getAutocompltecity');
Route::get('/dashboard/list_a_business',[App\Http\Controllers\BusinessesController::class,'add_list_business'])->middleware('auth');

Route::post('listingupdate',[App\Http\Controllers\BusinessesController::class, 'update'])->name("listingupdate");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about','about');
Route::view('/edit','edit_sahaa');
Route::view('/advertise','advertise');
Route::view('/advertising','advertising');
Route::view('/app','app');
Route::view('/careers','careers');
Route::view('/claim','claim');
Route::view('/help_support','help_support');
Route::view('/lifestyle','lifestyle');
Route::view('/local','local_sahaa');
Route::view('/location','location');
Route::view('/main-page','main-page');
Route::view('/owners','owners_sahaa');
Route::view('/profile','profile');
Route::view('/reviews','reviews');
Route::view('/search','search');
Route::view('/smart_moves','smart_moves');
Route::view('/use','use_sahaa');
Route::view('/visibility','visibility');

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/managelisting', ManageListing::class)->name('managelisting');
    Route::get('/emailtemplate', Emaillive::class)->name('emailtemplate');
    Route::get('/rankbykeyword', Rankbykeyword::class)->name('rankbyword');
//   Route::get('/UsersTable', UsersTable::class)->name('UsersTable');
    Route::get('/addlisting/{id}/edit', Addlisting::class)->name('editlisting');
    Route::get('/addlisting', Addlisting::class)->name('addlisting');
    Route::get('/listing/{id}/delete',  [App\Http\Controllers\BusinessesController::class, 'destroy'])->name('deletelisting');
    Route::get('/dashboard/listings/{id}/edit',[App\Http\Controllers\BusinessesController::class, 'edit'])->middleware('auth');
    Route::post('/listingstore',[App\Http\Controllers\BusinessesController::class,'store'])->name("listingstore");
    Route::post('/apilistingstore',[App\Http\Controllers\API\apibusinesses::class,'store'])->name("apilistingstore");
    Route::post('/apilistingupdate/{id}',[App\Http\Controllers\API\apibusinesses::class,'update'])->name("apilistingupdate");
    Route::post('/saveemailtemplate',[App\Http\Controllers\API\apibusinesses::class,'saveemailtemplate'])->name("saveemailtemplate");
    //Route::get('/listings/{id}/delete', [App\Http\Controllers\BusinessesController::class, 'destroy'])->middleware('auth');

    // Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    // Route::get('/users', Users::class)->name('users');
    // //Route::get('/login-example', LoginExample::class)->name('login-example');
    // Route::get('/register-example', RegisterExample::class)->name('register-example');
    // Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    // Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    // Route::get('/transactions', Transactions::class)->name('transactions');
    // Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    // Route::get('/lock', Lock::class)->name('lock');
    // Route::get('/buttons', Buttons::class)->name('buttons');
    // Route::get('/notifications', Notifications::class)->name('notifications');
    // Route::get('/forms', Forms::class)->name('forms');
    // Route::get('/modals', Modals::class)->name('modals');
    // Route::get('/typography', Typography::class)->name('typography');
    
    // Route::get('/totallisting', TotalListing::class)->name('totallisting');
    



    Route::get('/listingcategory', Listingcategory::class)->name('listingcategory');
    Route::get('/reportlisting', ReportListing::class)->name('reportlisting');
    Route::get('/managemedia', ManageMedia::class)->name('managemedia');
    Route::get('/review', Review::class)->name('review');
    Route::get('/customfields', CustomFields::class)->name('customfields');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/userstar', UserStar::class)->name('userstar');
    Route::get('/totalreviews', TotalReviews::class)->name('totalreviews');
    Route::get('/totalsuggestion', TotalSuggestion::class)->name('totalsuggestion');
    Route::get('/reportedlisting', ReportedListing::class)->name('reportedlisting');
    Route::get('/activelisting', ActiveListing::class)->name('activelisting');
    Route::get('/pendinglisting', PendingListing::class)->name('pendinglisting');
    Route::get('/device', Device::class)->name('device');
    Route::get('/browser', Browser::class)->name('browser');
    Route::get('/activeusers', ActiveUsers::class)->name('activeusers');
    Route::get('/activeclient', ActiveClient::class)->name('activeclient');
 
});



Auth::routes();