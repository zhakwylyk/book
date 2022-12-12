<?php

use App\Http\Controllers\Post\CategoryController;
use Illuminate\Support\Facades\Route;

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
Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/rollback',function(){
    Artisan::call('migrate:rollback');
});



Route::group(['namespase' => 'Main'], function (){
    Route::get('/', [App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
});


Route::group(['namespase' => 'Post', 'prefix' => 'post'],function (){
    Route::get('/', [App\Http\Controllers\Post\IndexController::class, 'index'])->name('post.index');
    Route::get('/{post}', [App\Http\Controllers\Post\ShowController::class, 'index'])->name('post.show');
    //post/comments
    Route::group(['namespase' => 'Comment', 'prefix' => '{post}/comments'], function () {
        Route::post('/',[App\Http\Controllers\Post\Comment\StoreController::class,'index'])->name('post.comment.store');
    });
    //post/lake
    Route::group(['namespase' => 'Like', 'prefix' => '{post}/lakes'], function () {
        Route::post('/',[App\Http\Controllers\Post\Lake\StoreController::class,'index'])->name('post.lake.store');
    });
});

//////////////////////////////////////CATEGORY////////////////////////////////////////////
Route::group(['namespase' => 'Category', 'prefix' => 'categories'],function (){
    Route::get('/', [App\Http\Controllers\Category\IndexController::class, 'index'])->name('category.index');

    Route::group(['namespase' => 'Post', 'prefix' => '{category}/posts'], function () {
        Route::get('/',[App\Http\Controllers\Category\Post\IndexController::class,'index'])->name('category.post.index');
    });
});


//////////////////////////////////////USER////PANEL////////////////////////////////////////////

Route::group(['namespase' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified'] ],function (){
    Route::group(['namespase' => 'Main'],function (){
        Route::get('/',[\App\Http\Controllers\Personal\Main\IndexController::class, 'index'])->name('personal.main.index');
    });


    Route::group(['namespase' => 'Post', 'prefix' => 'post'],function (){
        Route::get('/',[App\Http\Controllers\Personal\Post\IndexController::class,'index'])->name('personal.post.index');
        Route::get('/create',[App\Http\Controllers\Personal\Post\CreateController::class,'index'])->name('personal.post.create');
        Route::post('/',[App\Http\Controllers\Personal\Post\StoreController::class,'index'])->name('personal.post.store');
        Route::get('/{post}',[App\Http\Controllers\Personal\Post\ShowController::class,'index'])->name('personal.post.show');
        Route::get('/{post}/edit',[App\Http\Controllers\Personal\Post\EditController::class,'index'])->name('personal.post.edit');
        Route::patch('/{post}',[App\Http\Controllers\Personal\Post\UpdateController::class,'index'])->name('personal.post.update');
        Route::delete('/{post}',[App\Http\Controllers\Personal\Post\DeleteController::class,'index'])->name('personal.post.delete');
    });

    Route::group(['namespase' => 'Liked', 'prefix' => 'liked'],function (){
        Route::get('/',[App\Http\Controllers\Personal\Liked\IndexController::class,'index'])->name('personal.liked.index');
        Route::delete('/{post}', [App\Http\Controllers\Personal\Liked\DeleteController::class,'index'])->name('personal.liked.delete');
    });

    Route::group(['namespase' => 'Comment', 'prefix' => 'comment'],function (){
        Route::get('/',[App\Http\Controllers\Personal\Comment\IndexController::class,'index'])->name('personal.comment.index');
        Route::get('/{comment}/edit', [App\Http\Controllers\Personal\Comment\EditController::class,'index'])->name('personal.comment.edit');
        Route::patch('/{comment}', [App\Http\Controllers\Personal\Comment\UpdateController::class,'index'])->name('personal.comment.update');
        Route::delete('/{comment}', [App\Http\Controllers\Personal\Comment\DeleteController::class,'index'])->name('personal.comment.delete');
    });
});


//////////////////////////////////////////ADMIN/////////PANEL/////////////////////////////////////////////////





Route::group(['namespase' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin'] ],function (){
    Route::group(['namespase' => 'Main'],function (){
    Route::get('/',[\App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');
    });


    Route::group(['namespase' => 'Banner', 'prefix' => 'ads'], function (){
        Route::get('/',[App\Http\Controllers\Admin\Banner\IndexController::class,'index'])->name('admin.banner.index');
        Route::get('/create',[App\Http\Controllers\Admin\Banner\CreateController::class,'index'])->name('admin.banner.create');
        Route::post('/',[App\Http\Controllers\Admin\Banner\StoreController::class,'index'])->name('admin.banner.store');
        Route::get('/{ads}',[App\Http\Controllers\Admin\Banner\ShowController::class,'index'])->name('admin.banner.show');
        Route::get('/{ads}/edit',[App\Http\Controllers\Admin\Banner\EditController::class,'index'])->name('admin.banner.edit');
        Route::patch('/{ads}',[App\Http\Controllers\Admin\Banner\UpdateController::class,'index'])->name('admin.banner.update');
        Route::delete('/{ads}',[App\Http\Controllers\Admin\Banner\DeleteController::class,'index'])->name('admin.banner.delete');
    });


    Route::group(['namespase' => 'Setting', 'prefix' => 'settings'], function (){
        Route::get('/',[App\Http\Controllers\Admin\Setting\IndexController::class,'index'])->name('admin.setting.index');
        Route::get('/create',[App\Http\Controllers\Admin\Setting\CreateController::class,'index'])->name('admin.setting.create');
        Route::post('/',[App\Http\Controllers\Admin\Setting\StoreController::class,'index'])->name('admin.setting.store');
        Route::get('/{settings}',[App\Http\Controllers\Admin\Setting\ShowController::class,'index'])->name('admin.setting.show');
        Route::get('/{settings}/edit',[App\Http\Controllers\Admin\Setting\EditController::class,'index'])->name('admin.setting.edit');
        Route::patch('/{settings}',[App\Http\Controllers\Admin\Setting\UpdateController::class,'index'])->name('admin.setting.update');
        Route::delete('/{settings}',[App\Http\Controllers\Admin\Setting\DeleteController::class,'index'])->name('admin.setting.delete');
    });




    //POST
    Route::group(['namespase' => 'Post', 'prefix' => 'posts'], function (){
        Route::get('/',[App\Http\Controllers\Admin\Post\IndexController::class,'index'])->name('admin.post.index');
        Route::get('/create',[App\Http\Controllers\Admin\Post\CreateController::class,'index'])->name('admin.post.create');
        Route::post('/',[App\Http\Controllers\Admin\Post\StoreController::class,'index'])->name('admin.post.store');
        Route::get('/{post}',[App\Http\Controllers\Admin\Post\ShowController::class,'index'])->name('admin.post.show');
        Route::get('/{post}/edit',[App\Http\Controllers\Admin\Post\EditController::class,'index'])->name('admin.post.edit');
        Route::patch('/{post}',[App\Http\Controllers\Admin\Post\UpdateController::class,'index'])->name('admin.post.update');
        Route::delete('/{post}',[App\Http\Controllers\Admin\Post\DeleteController::class,'index'])->name('admin.post.delete');
    });


    //CATEGORY
    Route::group(['namespase' => 'Category', 'prefix' => 'categories'], function (){
        Route::get('/',[App\Http\Controllers\Admin\Category\IndexController::class,'index'])->name('admin.category.index');
        Route::get('/create',[App\Http\Controllers\Admin\Category\CreateController::class,'index'])->name('admin.category.create');
        Route::post('/',[App\Http\Controllers\Admin\Category\StoreController::class,'index'])->name('admin.category.store');
        Route::get('/{category}',[App\Http\Controllers\Admin\Category\ShowController::class,'index'])->name('admin.category.show');
        Route::get('/{category}/edit',[App\Http\Controllers\Admin\Category\EditController::class,'index'])->name('admin.category.edit');
        Route::patch('/{category}',[App\Http\Controllers\Admin\Category\UpdateController::class,'index'])->name('admin.category.update');
        Route::delete('/{category}',[App\Http\Controllers\Admin\Category\DeleteController::class,'index'])->name('admin.category.delete');
    });

    //TAGS
    Route::group(['namespase' => 'Tag', 'prefix' => 'tags'], function (){
        Route::get('/',[App\Http\Controllers\Admin\Tag\IndexController::class,'index'])->name('admin.tag.index');
        Route::get('/create',[App\Http\Controllers\Admin\Tag\CreateController::class,'index'])->name('admin.tag.create');
        Route::post('/',[App\Http\Controllers\Admin\Tag\StoreController::class,'index'])->name('admin.tag.store');
        Route::get('/{tag}',[App\Http\Controllers\Admin\Tag\ShowController::class,'index'])->name('admin.tag.show');
        Route::get('/{tag}/edit',[App\Http\Controllers\Admin\Tag\EditController::class,'index'])->name('admin.tag.edit');
        Route::patch('/{tag}',[App\Http\Controllers\Admin\Tag\UpdateController::class,'index'])->name('admin.tag.update');
        Route::delete('/{tag}',[App\Http\Controllers\Admin\Tag\DeleteController::class,'index'])->name('admin.tag.delete');
    });

    //USER
    Route::group(['namespase' => 'User', 'prefix' => 'users'], function (){
        Route::get('/',[App\Http\Controllers\Admin\User\IndexController::class,'index'])->name('admin.user.index');
        Route::get('/create',[App\Http\Controllers\Admin\User\CreateController::class,'index'])->name('admin.user.create');
        Route::post('/',[App\Http\Controllers\Admin\User\StoreController::class,'index'])->name('admin.user.store');
        Route::get('/{user}',[App\Http\Controllers\Admin\User\ShowController::class,'index'])->name('admin.user.show');
        Route::get('/{user}/edit',[App\Http\Controllers\Admin\User\EditController::class,'index'])->name('admin.user.edit');
        Route::patch('/{user}',[App\Http\Controllers\Admin\User\UpdateController::class,'index'])->name('admin.user.update');
        Route::delete('/{user}',[App\Http\Controllers\Admin\User\DeleteController::class,'index'])->name('admin.user.delete');
    });


});














Auth::routes();



