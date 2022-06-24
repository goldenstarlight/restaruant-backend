<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dashboard\DashboardDefault;
use App\Http\Livewire\Dashboard\Vr\VirtualReality;
use App\Http\Livewire\Dashboard\Vr\VirtualInfo;
use App\Http\Livewire\Dashboard\Automotive;
use App\Http\Livewire\Dashboard\SmartHome;
use App\Http\Livewire\Dashboard\Crm;

use App\Http\Livewire\Pages\Profile\Overview;
use App\Http\Livewire\Pages\Profile\AllProjects;
use App\Http\Livewire\Pages\Profile\Teams;

use App\Http\Livewire\Pages\Users\Reports;
use App\Http\Livewire\Pages\Users\NewUser;

use App\Http\Livewire\Pages\Account\Settings;
use App\Http\Livewire\Pages\Account\Billing;
use App\Http\Livewire\Pages\Account\Invoice;
use App\Http\Livewire\Pages\Account\Security;

use App\Http\Livewire\Pages\Projects\General;
use App\Http\Livewire\Pages\Projects\Timeline;
use App\Http\Livewire\Pages\Projects\NewProject;

use App\Http\Livewire\Pages\Pricing;
use App\Http\Livewire\Pages\Rtl;
use App\Http\Livewire\Pages\Widgets;

use App\Http\Livewire\Applications\Analytics;
use App\Http\Livewire\Applications\Calendar;
use App\Http\Livewire\Applications\Datatables;
use App\Http\Livewire\Applications\Kanban;
use App\Http\Livewire\Applications\Wizard;

use App\Http\Livewire\Ecommerce\EcommerceOverview;
use App\Http\Livewire\Ecommerce\Referral;

use App\Http\Livewire\Ecommerce\Products\EditProduct;
use App\Http\Livewire\Ecommerce\Products\NewProduct;
use App\Http\Livewire\Ecommerce\Products\ProductPage;
use App\Http\Livewire\Ecommerce\Products\ProductsList;

use App\Http\Livewire\Ecommerce\Orders\OrderDetails;
use App\Http\Livewire\Ecommerce\Orders\OrderList;

use App\Http\Livewire\Authentication\Error\Error404;
use App\Http\Livewire\Authentication\Error\Error500;

use App\Http\Livewire\Authentication\Lock\LockBasic;
use App\Http\Livewire\Authentication\Lock\LockCover;
use App\Http\Livewire\Authentication\Lock\LockIllustration;

use App\Http\Livewire\Authentication\Reset\ResetBasic;
use App\Http\Livewire\Authentication\Reset\ResetCover;
use App\Http\Livewire\Authentication\Reset\ResetIllustration;

use App\Http\Livewire\Authentication\Signin\SigninBasic;
use App\Http\Livewire\Authentication\Signin\SigninCover;
use App\Http\Livewire\Authentication\Signin\SigninIllustration;

use App\Http\Livewire\Authentication\Signup\SignupBasic;
use App\Http\Livewire\Authentication\Signup\SignupCover;
use App\Http\Livewire\Authentication\Signup\SignupIllustration;

use App\Http\Livewire\Authentication\Verification\VerificationBasic;
use App\Http\Livewire\Authentication\Verification\VerificationCover;
use App\Http\Livewire\Authentication\Verification\VerificationIllustration;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;

use App\Http\Livewire\LaravelExamples\UsersManagement;
use App\Http\Livewire\LaravelExamples\EditUser;
use App\Http\Livewire\LaravelExamples\LaravelNewUser;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\RolesManagement;
use App\Http\Livewire\LaravelExamples\EditRole;
use App\Http\Livewire\LaravelExamples\NewRole;
use App\Http\Livewire\LaravelExamples\CategoryManagement;
use App\Http\Livewire\LaravelExamples\NewCategory;
use App\Http\Livewire\LaravelExamples\EditCategory;
use App\Http\Livewire\LaravelExamples\TagsManagement;
use App\Http\Livewire\LaravelExamples\NewTag;
use App\Http\Livewire\LaravelExamples\EditTag;
use App\Http\Livewire\LaravelExamples\ItemsManagement;
use App\Http\Livewire\LaravelExamples\NewItem;
use App\Http\Livewire\LaravelExamples\EditItem;
use App\Http\Livewire\LaravelExamples\Error\PageError;

use App\Http\Livewire\Portal\Dashboard as PortalDashboard;
use App\Http\Livewire\Portal\Users as PortalUsers;
use App\Http\Livewire\Portal\Notifications as PortalNotifications;
use App\Http\Livewire\Portal\Login as PortalLogin;
use App\Http\Livewire\Portal\Statement as PortalStatement;
use App\Http\Livewire\Portal\Restaurants;
use App\Http\Livewire\Portal\Projects;
use App\Http\Livewire\Portal\Chats;
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

Route::get('/', Login::class);

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    //Project
    Route::get('/portal-dashboard', PortalDashboard::class)->name('portal-dashboard');
    Route::get('/portal-users/{id?}/{type?}', PortalUsers::class)->name('portal-users');
    Route::post('/portal-users', [PortalUsers::class, 'store'])->name('add-user');
    Route::get('/user-back', [PortalUsers::class, 'back'])->name('back-user');
    Route::put('/portal-users/{id}', [PortalUsers::class, 'update'])->name('update-user');
    Route::delete('/portal-users/{id}', [PortalUsers::class, 'delete'])->name('delete-user');

    Route::get('/restaurants/{id?}/{type?}', Restaurants::class)->name('restaurants');
    Route::post('/restaurant', [Restaurants::class, 'store'])->name('add-restaurant');
    Route::put('/restaurant/{id}', [Restaurants::class, 'update'])->name('update-restaurant');
    Route::delete('/restaurant/{id}', [Restaurants::class, 'delete'])->name('delete-restaurant');

    Route::get('/projects/{id?}/{type?}', Projects::class)->name('projects');
    Route::post('/projects', [Projects::class, 'store'])->name('add-project');
    Route::put('/project/{id}', [Projects::class, 'update'])->name('update-project');
    Route::delete('/project/{id}', [Projects::class, 'delete'])->name('delete-project');

    Route::get('/portal-notifications', PortalNotifications::class)->name('portal-notifications');
    Route::get('/portal-statement', PortalStatement::class)->name('portal-statement');
    Route::get('/chats', Chats::class)->name('chats');

    //Theme
    Route::get('/dashboard-default', DashboardDefault::class)->name('default');
    Route::get('/dashboard-virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('/dashboard-virtual-info', VirtualInfo::class)->name('virtual-info');
    Route::get('/dashboard-automotive', Automotive::class)->name('automotive');
    Route::get('/dashboard-smart-home', SmartHome::class)->name('smart-home');
    Route::get('/dashboard-crm', Crm::class)->name('crm');

    Route::get('/pages-profile-overview', Overview::class)->name('overview');
    Route::get('/pages-profile-all-projects', AllProjects::class)->name('all-projects');
    Route::get('/pages-profile-teams', Teams::class)->name('teams');

    Route::get('/pages-users-reports', Reports::class)->name('reports');
    Route::get('/pages-users-new', NewUser::class)->name('new-user');
    Route::get('/messages', [Chats::class, 'fetchMessages']);
    Route::post('/messages', [Chats::class, 'sendMessage']);

    Route::get('/pages-account-settings', Settings::class)->name('settings');
    Route::get('/pages-account-billing', Billing::class)->name('billing');
    Route::get('/pages-account-invoice', Invoice::class)->name('invoice');
    Route::get('/pages-account-security', Security::class)->name('security');

    Route::get('/pages-projects-general', General::class)->name('general');
    Route::get('/pages-projects-timeline', Timeline::class)->name('timeline');
    Route::get('/pages-projects-new-project', NewProject::class)->name('new-project');

    Route::get('/pages-pricing', Pricing::class)->name('pricing');
    Route::get('/pages-widgets', Widgets::class)->name('widgets');
    Route::get('/pages-rtl', Rtl::class)->name('rtl');

    Route::get('/applications-analytics', Analytics::class)->name('analytics');
    Route::get('/applications-calendar', Calendar::class)->name('calendar');
    Route::get('/applications-datatables', Datatables::class)->name('datatables');
    Route::get('/applications-kanban', Kanban::class)->name('kanban');
    Route::get('/applications-wizard', Wizard::class)->name('wizard');

    Route::get('/ecommerce-overview', EcommerceOverview::class)->name('ecommerce-overview');
    Route::get('/ecommerce-referral', Referral::class)->name('referral');

    Route::get('/ecommerce-products-edit-product', EditProduct::class)->name('edit-product');
    Route::get('/ecommerce-products-new-product', NewProduct::class)->name('new-product');
    Route::get('/ecommerce-products-product-page', ProductPage::class)->name('product-page');
    Route::get('/ecommerce-products-products-list', ProductsList::class)->name('products-list');

    Route::get('/ecommerce-orders-order-list', OrderList::class)->name('orders');
    Route::get('/ecommerce-orders-order-details', OrderDetails::class)->name('order-details');

    Route::get('/authentication-error404', Error404::class)->name('404');
    Route::get('/authentication-error500', Error500::class)->name('500');

    Route::get('/authentication-lock-basic', LockBasic::class)->name('lock-basic');
    Route::get('/authentication-lock-cover', LockCover::class)->name('lock-cover');
    Route::get('/authentication-lock-illustration', LockIllustration::class)->name('lock-illustration');

    Route::get('/authentication-reset-basic', ResetBasic::class)->name('reset-basic');
    Route::get('/authentication-reset-cover', ResetCover::class)->name('reset-cover');
    Route::get('/authentication-reset-illustration', ResetIllustration::class)->name('reset-illustration');

    Route::get('/authentication-signin-basic', SigninBasic::class)->name('signin-basic');
    Route::get('/authentication-signin-cover', SigninCover::class)->name('signin-cover');
    Route::get('/authentication-signin-illustration', SigninIllustration::class)->name('signin-illustration');

    Route::get('/authentication-signup-basic', SignupBasic::class)->name('signup-basic');
    Route::get('/authentication-signup-cover', SignupCover::class)->name('signup-cover');
    Route::get('/authentication-signup-illustration', SignupIllustration::class)->name('signup-illustration');

    Route::get('/authentication-verification-basic', VerificationBasic::class)->name('verification-basic');
    Route::get('/authentication-verification-cover', VerificationCover::class)->name('verification-cover');
    Route::get('/authentication-verification-illustration', VerificationIllustration::class)->name('verification-illustration');

    Route::get('/laravel-users-management', UsersManagement::class)->name('users-management');
    // Route::get('/laravel-edit-user/{id}', EditUser::class)->name('edit-user');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-new-user', LaravelNewUser::class)->name('laravel-new-user');
    Route::get('/laravel-roles-management', RolesManagement::class)->name('roles-management');
    Route::get('/laravel-edit-role/{id}', EditRole::class)->name('edit-role');
    Route::get('/laravel-new-role', NewRole::class)->name('new-role');
    Route::get('/laravel-category-management', CategoryManagement::class)->name('category-management');
    Route::get('/laravel-new-category', NewCategory::class)->name('new-category');
    Route::get('/laravel-edit-category/{id}', EditCategory::class)->name('edit-category');
    Route::get('/laravel-tags-management', TagsManagement::class)->name('tags-management');
    Route::get('/laravel-new-tag', NewTag::class)->name('new-tag');
    Route::get('/laravel-edit-tag/{id}', EditTag::class)->name('edit-tag');
    Route::get('/laravel-items-management', ItemsManagement::class)->name('items-management');
    Route::get('/laravel-new-item', NewItem::class)->name('new-item');
    Route::get('/laravel-edit-item/{id}', EditItem::class)->name('edit-item');
    Route::get('/laravel-page-error', PageError::class)->name('page-error');
    
});