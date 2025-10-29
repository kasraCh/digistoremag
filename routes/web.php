<?php

use App\Http\Controllers\AdminPage\Auth\LogoutController;
use App\Http\Controllers\AdminPage\IndexController;
use App\Http\Controllers\AdminPage\User\UserController;
use App\Http\Controllers\AdminPage\User\SecurityController;
use App\Http\Controllers\AdminPage\Auth\RegisterController;
use App\Http\Controllers\AdminPage\Auth\LoginController;
use App\Http\Controllers\AdminPage\Blog\BlogController;
use App\Http\Controllers\AdminPage\Blog\BlogListController;
use App\Http\Controllers\AdminPage\Blog\UserBlogsController;
use App\Http\Controllers\AdminPage\Category\CategoryController;
use App\Http\Controllers\AdminPage\User\AdminPermissionController;
use App\Http\Controllers\AdminPage\User\ProfileController;
use App\Http\Controllers\AdminPage\User\SearchController;
use App\Http\Controllers\digimag\Blog\BlogController as DigimagBlogController;
use App\Http\Controllers\digimag\Blog\CommentController;
use App\Http\Controllers\digimag\Blog\SearchController as BlogSearchController;
use App\Http\Controllers\digimag\IndexController as DigimagIndexController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '', 'as' => 'admin.'], function () {

    Route::get('login', [LoginController::class, 'index'])->name('login.view');
    
    Route::post('login', [LoginController::class, 'login'])->name('login.action');
    
    Route::get('register', [RegisterController::class, 'index'])->name('register.view');
    
    Route::post('register', [RegisterController::class, 'action'])->name('register.action');
    
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth' , 'admin']] , function () {

    Route::get('/',[IndexController::class, 'index'])->name('view');

    Route::get('blogs', [BlogListController::class, 'index'])->name('view.blogs');
    
    Route::get('user-blogs', [UserBlogsController::class, 'index'])->name('blogs.user.created');

    Route::get('user/list', [UserController::class, 'index'])->name('user.list.view');

    Route::get('user/security', [SecurityController::class, 'index'])->name('user.security.view');

    Route::get('profile', [ProfileController::class, 'index'])->name('user.profile');

    Route::post('user/edit/name', [SecurityController::class, 'editName'])->name('user.edit.name');

    Route::get('blog', [BlogController::class, 'index'])->name('blog.view');

    Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');

    Route::get('category', [CategoryController::class, 'index'])->name('category.view');

    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('category/{id}/dellete', [CategoryController::class, 'dellete'])->name('category.delete');

    Route::get('article/{id}/edit', [BlogController::class, 'editView'])->name('article.edit.view');

    Route::post('article/{id}/edit', [BlogController::class, 'edit'])->name('article.edit.action');

    Route::get('article/{id}/delete', [BlogController::class, 'delete'])->name('article.delete');

    Route::post('user/security', [SecurityController::class, 'editPassword'])->name('user.security.action');

});

Route::get('/', [DigimagIndexController::class, 'index'])->name('digimag.index');

Route::get('admin-permission/{email}/{user_id}', [AdminPermissionController::class, 'index'])->name('admin.user.get.permission');

Route::get('admin-delete-permission/{user_id}', [AdminPermissionController::class, 'delete'])->name('admin.user.delete.permission');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('blog/{id}', [DigimagBlogController::class, 'index'])->name('digimag.blog.view');

Route::post('blog/{id}/comment', [CommentController::class, 'index'])->name('digimag.blog.comment');

Route::get('admin/user/search', [SearchController::class, 'index'])->name('admin.user.list.search');

Route::get('blog-list/search', [BlogSearchController::class, 'index'])->name('digimag.blog.search');

Route::get('blog/{category}/category', [DigimagIndexController::class, 'showCategory'])->name('digimag.blog.category');

Route::get('blogs', [DigimagBlogController::class, 'allBlog'])->name('digimag.blog.all');