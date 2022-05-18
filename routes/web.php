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
// use App\Http\Livewire\Auth\Login;
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
// use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
// use App\Http\Livewire\Users;
use App\Http\Livewire\AddUser;
// use DB;


// TheIRF Controllers
use App\Http\Controllers\ManageUsers;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GuestUser;
use App\Http\Controllers\ListingReview;
use App\Http\Controllers\FollowListing;
use App\Http\Controllers\ShareListing;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

#----------------------------------#
// ----- FRONTEND ROUTES ------- //
#----------------------------------#

// Route::middleware('LoginCheck')->group(function () {});
Route::get('/', function () {
    $data['page_name'] = 'The UAE Leading Online Business Directory';
    $data['user_portal'] = (Session::has('user_portal')) ? Session::get('user_portal') : "" ;
    return view('home/home',$data);
})->middleware('Tracking');

Route::middleware('Tracking')->group(function () {

    Route::get('/about', function () {
        $data['page_name'] = 'About Us';
        return view('frontend/about',$data);
    });

    Route::get('/edit-my-business-listing', function () {
        $data['page_name'] = 'Edit My Business listing';
        return view('frontend/edit_sahaa',$data);
    });

    Route::get('/business-owners', function () {
        $data['page_name'] = 'Business Owners';
        return view('frontend/owners_sahaa',$data);
    });

    Route::get('/how-to-use', function () {
        $data['page_name'] = 'How to use Sahaa.me ? ';
        return view('frontend/use_sahaa',$data);
    });

    Route::get('/find-local-business', function () {
        $data['page_name'] = 'Find Local Businesses';
        return view('frontend/local_sahaa',$data);
    });

    Route::get('/find-business-by-location', function () {
        $data['page_name'] = 'Find Business by Locations';
        return view('frontend/location',$data);
    });

    Route::get('/how-to-search', function () {
        $data['page_name'] = 'Search on Sahaa.me';
        return view('frontend/search',$data);
    });

    Route::get('/claim-your-business', function () {
        $data['page_name'] = 'Claim Your Business';
        return view('frontend/claim',$data);
    });

    Route::get('/how-to-edit-or-add-content-to-business-profile', function () {
        $data['page_name'] = 'How to edit or add Content to Business Profile ?';
        return view('frontend/profile',$data);
    });

    Route::get('/advertise-my-business', function () {
        $data['page_name'] = 'How to Adversise my Business';
        return view('frontend/advertise',$data);
    });

    Route::get('/increase-your-business-visibilty', function () {
        $data['page_name'] = 'Increase your business visibility';
        return view('frontend/visibility',$data);
    });

    Route::get('/can-i-claim-my-bussiness-on-app', function () {
        $data['page_name'] = 'Can I claim my Business listing on Sahaa Business app?';
        return view('frontend/app',$data);
    });

    Route::get('/help-support', function () {
        $data['page_name'] = 'Help & Support - Message Now';
        return view('frontend/help_support',$data);
    });

    Route::get('/review-businesses', function () {
        $data['page_name'] = 'Review Business';
        return view('frontend/reviews',$data);
    });

    Route::get('/advertise-your-business', function () {
        $data['page_name'] = 'The UAE Leading Online Business Directory';
        return view('home/home',$data);
    });

    Route::get('/smart-moves', function () {
        $data['page_name'] = 'Smart Moves';
        return view('frontend/smart_moves',$data);
    });

    Route::get('/sahaa-app', function () {
        $data['page_name'] = 'Sahaa.me Application';
        return view('frontend/sahaa_app',$data);
    });

    Route::get('add-listing-to-sahaa', function () {
        $data['page_name'] = 'Add Listing to Sahaa';
        return view('frontend/contact_us',$data);
    });

    Route::get('/all-categories', function () {
        $data['page_name'] = 'All Categories';
        return view('frontend/categories',$data);
    });

    Route::get('/social-media-advertising', function () {
        $data['page_name'] = 'Social Media Advertising';
        return view('frontend/social_media',$data);
    });

    Route::get('/seacrh-engine-optimization', function () {
        $data['page_name'] = 'Search Engine Optimization (SEO)';
        return view('frontend/seo',$data);
    });

    Route::get('/smart-websites', function () {
        $data['page_name'] = 'Smart Websites';
        return view('frontend/website',$data);
    });

    Route::get('/digital-marketing', function () {
        $data['page_name'] = 'Digital Marketing';
        return view('frontend/digital_marketing',$data);
    });

    Route::get('/video-marketing', function () {
        $data['page_name'] = 'Video Marketing';
        return view('frontend/videos',$data);
    });

    Route::get('/free-digital-marketing', function () {
        $data['page_name'] = 'Free Digital Markiting';
        return view('frontend/free_digital_marketing',$data);
    });

    Route::get('/membership', function () {
        $data['page_name'] = 'Sahaa Promotions';
        return view('home/membership',$data);
    });

    Route::get('/schedual-call', function () {
        $data['page_name'] = 'Schedual a Consultation Call';
        $data['success'] = false;
        return view('home/schedual-call',$data);
    });
    Route::post('/schedual-call/add', 'App\Http\Controllers\ScheduleCalls@insert');

    Route::get('/business/search/', 'App\Http\Controllers\Business@search');
    // Business Search
    // Route::get('/business/search/{parms}', 'App\Http\Controllers\Business@search_parms');
    // Business Detail
    Route::get('/business/detail/{slug}', 'App\Http\Controllers\Business@show_detail');
    // Business Profile Routes
    Route::get('/business/{slug}', 'App\Http\Controllers\MiniSite@show_profile');
    Route::get('/business/profile/{slug}/projects', 'App\Http\Controllers\MiniSite@projects_page');
    Route::get('/business/profile/{slug}/promotions', 'App\Http\Controllers\MiniSite@promotions_page');
    Route::get('/business/profile/{slug}/promotions', 'App\Http\Controllers\MiniSite@promotions_page');

});

Route::get('/add-yours', 'App\Http\Controllers\Business@add_yours');
Route::post('/add-yours', 'App\Http\Controllers\Business@insert_add_yours');

// Save Review
Route::post('/business/detail/save/review', 'App\Http\Controllers\Business@save_review');

#----------------------------------#
// ----- User Login ROUTES ----- //
#----------------------------------#
// User Login
Route::get('/admin/login',[ManageUsers::class, 'login_form']);
Route::get('/login',[ManageUsers::class, 'login_form']);
Route::get('/portal/login',[ManageUsers::class, 'login_form']);
Route::post('/admin/login',[ManageUsers::class, 'login']);
Route::get('/logout',[ManageUsers::class, 'logout']);

// Guest Login
Route::get( 'guest/login' , [ GuestUser::class, 'login_form' ] );
Route::get( 'guest/signup' , [ GuestUser::class, 'signup_form' ] );

//forgetpassword
Route::get( 'guest/forgetpassword' , [GuestUser::class, 'forget_form'] );
Route::post('guest/forgetpassword', [GuestUser::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('guest/reset-password/{token}', [GuestUser::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('guest/reset-password', [GuestUser::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post( 'guest/login' , [ GuestUser::class, 'login' ] );
Route::get( 'guest/logout' , [ GuestUser::class, 'logout' ] );
Route::post( 'guest/verify-email/{parms}' , [ GuestUser::class, 'verify_email' ] );

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// ------- Ajax ROUTES -------- //
Route::post( 'guest/signup' , [ GuestUser::class, 'signup' ] );

// Guest Profile
Route::middleware('GuestLoginCheck')->group(function () {
    Route::get( 'guest/profile/' , [ GuestUser::class, 'show_profile' ] );
    Route::post( 'guest/profile/update/banner' , [ GuestUser::class, 'update_banner' ] );
    Route::post( 'guest/profile/update/profile-image' , [ GuestUser::class, 'update_profile_image' ] );
    Route::post( 'guest/profile/update' , [ GuestUser::class, 'update_profile' ] );
    Route::get( 'guest/profile/reviews' , [ GuestUser::class, 'list_reviews' ] );
    Route::get( 'guest/profile/review/edit/{review_id}' , [ GuestUser::class, 'edit_review_form' ] );
    Route::post( 'guest/profile/review/update/{review_id}' , [ GuestUser::class, 'update_review' ] );
    Route::get( 'guest/profile/review/delete/{review_id}' , [ GuestUser::class, 'delete_review' ] );
});

// Auto-Complete
Route::post('/autocomplete/getAutocomplete/',[App\Http\Controllers\API\apibusinesses::class,'getAutocomplete'])->name('Autocomplte.getAutocomplte');
Route::post('/autocomplete/getAutocompletecity/',[App\Http\Controllers\API\apibusinesses::class,'getAutocompletecity'])->name('Autocomplte.getAutocompltecity');
Route::post('/autocomplete/getAutocompleteservice/',[App\Http\Controllers\API\apibusinesses::class,'getAutocompleteserv'])->name('Autocomplte.getAutocomplte_services');

Route::middleware('LoginCheck')->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
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



//  Auth::routes(['register' => false]);

#----------------------------------#
// ----- Mini Site ROUTES ------- //
#----------------------------------#

# Routes By IRFAN
// ----- MiniSite ROUTES ------- //
Route::middleware('LoginCheck')->group(function () {
    // Lists
    Route::get('/admin/manage-minisite/list', 'App\Http\Controllers\MiniSite@business_list');
    // Dashboard
    Route::get('/admin/mini-site/{business_id}/dashboard','App\Http\Controllers\MiniSite@dashboard');

    Route::get('/admin/minisite/list', 'App\Http\Controllers\MiniSite@mini_site_list');
    // Mini Site Panel
    Route::get('/admin/minisite/add/{id}', 'App\Http\Controllers\MiniSite@add_minisite_panel');
    // Overview & Basic
    Route::get('/admin/mini-site/{id}/basic-info/form', 'App\Http\Controllers\MiniSite@basic_info_form');
    Route::post('/admin/mini-site/{id}/basic-info/add', 'App\Http\Controllers\MiniSite@insert_basic_info');
    Route::get('/admin/mini-site/{id}/company-overview/form', 'App\Http\Controllers\MiniSite@company_overview_form');
    Route::post('/admin/mini-site/{id}/company-overview/add', 'App\Http\Controllers\MiniSite@insert_company_overview');
    // Service
    Route::get('/admin/mini-site/{id}/services/list', 'App\Http\Controllers\MiniSite@list_services');
    Route::get('/admin/mini-site/{id}/services/form', 'App\Http\Controllers\MiniSite@services_form');
    Route::post('/admin/mini-site/{id}/services/add', 'App\Http\Controllers\MiniSite@insert_services');
    Route::get('/admin/mini-site/{id}/services/{service_id}/edit-form', 'App\Http\Controllers\MiniSite@services_edit_form');
    Route::post('/admin/mini-site/{id}/services/{service_id}/update', 'App\Http\Controllers\MiniSite@services_update');
    Route::get('/admin/mini-site/{id}/services/{service_id}/delete', 'App\Http\Controllers\MiniSite@services_delete');
    // Projects
    Route::get('/admin/mini-site/{id}/projects/list', 'App\Http\Controllers\MiniSite@list_project');
    Route::get('/admin/mini-site/{id}/projects/form', 'App\Http\Controllers\MiniSite@projects_form');
    Route::post('/admin/mini-site/{id}/projects/add', 'App\Http\Controllers\MiniSite@insert_projects');
    Route::get('/admin/mini-site/{id}/projects/{project_id}/edit-form', 'App\Http\Controllers\MiniSite@projects_edit_form');
    Route::post('/admin/mini-site/{id}/projects/{project_id}/update', 'App\Http\Controllers\MiniSite@project_update');
    Route::get('/admin/mini-site/{id}/projects/{project_id}/delete', 'App\Http\Controllers\MiniSite@projects_delete');
    // Promotion
    Route::get('/admin/mini-site/{id}/promotions/list', 'App\Http\Controllers\MiniSite@list_promotion');
    Route::get('/admin/mini-site/{id}/promotions/form', 'App\Http\Controllers\MiniSite@promotions_form');
    Route::post('/admin/mini-site/{id}/promotions/add', 'App\Http\Controllers\MiniSite@insert_promotions');
    Route::get('/admin/mini-site/{id}/promotions/{promotion_id}/edit-form', 'App\Http\Controllers\MiniSite@promotions_edit_form');
    Route::post('/admin/mini-site/{id}/promotions/{promotion_id}/update', 'App\Http\Controllers\MiniSite@promotion_update');
    Route::get('/admin/mini-site/{id}/promotions/{promotion_id}/delete', 'App\Http\Controllers\MiniSite@promotions_delete');

    #Calls
    Route::get('/dashboard/schedule-calls/list', 'App\Http\Controllers\ScheduleCalls@list');
    Route::get('/dashboard/business-request/list', 'App\Http\Controllers\Business@request_list');
    // Upload File
    Route::post('/admin/upload-file', 'App\Http\Controllers\AjaxUpload@upload_file');
});

#----------------------------------#
// --- Manage Dashboard ROUTES --- //
#----------------------------------#

// User Managment
Route::middleware('LoginCheck')->group(function () {
    // Users
    Route::get('/dashboard/add/users-form', 'App\Http\Controllers\ManageUsers@add_form' );
    Route::post('/dashboard/add/user', 'App\Http\Controllers\ManageUsers@insert' );
    Route::get('/dashboard/manage/users', 'App\Http\Controllers\ManageUsers@list' );
    Route::get('/dashboard/manage/users/blocked', 'App\Http\Controllers\ManageUsers@list_blocked' );
    Route::get('/dashboard/manage/users/{id}/delete', 'App\Http\Controllers\ManageUsers@delete' );
    Route::get('/dashboard/manage/users/{id}/edit-form', 'App\Http\Controllers\ManageUsers@edit_form' );
    Route::post('/dashboard/manage/users/{id}/update', 'App\Http\Controllers\ManageUsers@update_user' );
    Route::get('/dashboard/manage/users/{id}/password-form', 'App\Http\Controllers\ManageUsers@password_form' );
    Route::post('/dashboard/manage/users/{id}/update-password', 'App\Http\Controllers\ManageUsers@update_password' );

});

// Roles Managment
Route::middleware('LoginCheck')->group(function () {
    // Roles
    Route::get('/dashboard/add/role-form', 'App\Http\Controllers\ManageUserRoles@add_form' );
    Route::post('/dashboard/add/role', 'App\Http\Controllers\ManageUserRoles@insert' );
    Route::get('/dashboard/manage/roles', 'App\Http\Controllers\ManageUserRoles@list' );
    Route::get('/dashboard/manage/roles/{id}/delete', 'App\Http\Controllers\ManageUserRoles@delete' );
    Route::get('/dashboard/manage/roles/{id}/edit', 'App\Http\Controllers\ManageUserRoles@show_edit_form' );
    Route::post('/dashboard/manage/roles/{id}/update', 'App\Http\Controllers\ManageUserRoles@update' );

});

// Listing Managment
Route::middleware('LoginCheck')->group(function () {
    // View Listing
    Route::get('/manage/listing/{id}/view', 'App\Http\Controllers\ManageListings@show_data' );

    Route::get('/manage/listingmedia', 'App\Http\Controllers\ManageListings@listimage' );

    Route::get('/manage/listing/add-form', 'App\Http\Controllers\ManageListings@show_form' );
    Route::post('/manage/listing/add', 'App\Http\Controllers\ManageListings@insert_data' );
    Route::get('/manage/listing/list', 'App\Http\Controllers\ManageListings@list' );
    Route::get('/manage/listing/recheck', 'App\Http\Controllers\ManageListings@recheck' );
    Route::post('/manage/listing/list/bulk_action', 'App\Http\Controllers\ManageListings@action_filtered_list' );
    Route::post('/manage/listing/list/', 'App\Http\Controllers\ManageListings@filtered_list' );
    Route::get('/manage/listing/{id}/delete', 'App\Http\Controllers\ManageListings@delete' );
    Route::get('/manage/listing/{id}/edit-form', 'App\Http\Controllers\ManageListings@edit_form' );
    Route::post('/manage/listing/{id}/update', 'App\Http\Controllers\ManageListings@update' );


    Route::get('/manage/listing-image/{id}/edit-image', 'App\Http\Controllers\ManageListings@edit_alt');
    Route::post('/manage/listing-image/{id}/update-image', 'App\Http\Controllers\ManageListings@update_alt' );

});

// Email Managment
Route::middleware('LoginCheck')->group(function () {
    // Email Templates
    Route::get('/manage/email-template/list', 'App\Http\Controllers\EmailTemplate@list' );
    Route::get('/manage/email-template/{id}/view', 'App\Http\Controllers\EmailTemplate@view' );
    Route::get('/manage/email-template/add-form', 'App\Http\Controllers\EmailTemplate@add_form' );
    Route::post('/manage/email-template/add', 'App\Http\Controllers\EmailTemplate@insert' );
    Route::get('/manage/email-template/{id}/edit-form', 'App\Http\Controllers\EmailTemplate@edit_form' );
    Route::post('/manage/email-template/{id}/update', 'App\Http\Controllers\EmailTemplate@update' );
    Route::get('/manage/email-template/{id}/delete', 'App\Http\Controllers\EmailTemplate@delete' );
    Route::get('/manage/email-template/listing/{id}', 'App\Http\Controllers\EmailTemplate@email_template_genrater' );

});

// Ajax Managment
Route::middleware('LoginCheck')->group(function () {
    // Ajax
    Route::post('/ajax/bulk_action', 'App\Http\Controllers\ManageAjax@bulk_action' );
    Route::post('/ajax/check_name', 'App\Http\Controllers\ManageAjax@check_name' );
    Route::get('/ajax/get/users/{id}', 'App\Http\Controllers\ManageAjax@get_users' );

});
Route::get('/ajax/get/sub-categories/{id}', 'App\Http\Controllers\ManageAjax@get_sub_categories' );
Route::get('/ajax/get/areas/{id}', 'App\Http\Controllers\ManageAjax@get_areas' );

// DB Managment
Route::middleware('LoginCheck')->group(function () {
    // DB Fixing
    Route::get('/db-fixing', 'App\Http\Controllers\DBFixing@index' );

});

#----------------------------------#
// ------- Testing ROUTES -------- //
#----------------------------------#

// Testing Routes
Route::get('/email-template', function () {
    return view('home/email-template');
});
Route::get('/listing-template', function () {
    $data['business']= DB::select("SELECT * FROM businesses WHERE id=40");
    $data['business'] = $data['business'][0];
    return view('home.admin.dashboard.email-template.listing',$data);
});
Route::get('/send-mail', function () {
    Mail::to('the.irf.1234@gmail.com')->send(new PromotionMail());
    return new PromotionMail();
});

