<?php
use App\Models\thread;
use App\Models\chat;
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
Route::get('/', function () {
    $data['threads'] = Thread::all();
    return view('main',$data);
});
Route::get('/admin', function () {
    $data['threads'] = Thread::all();
    return view('admin_main',$data);
})->name('admin.main');;
Route::get('/new', function () {
    return view('new_thread');
});
Route::post('/create', 'App\Http\Controllers\ThreadController@create');

Route::post('/thread/{id}/create','App\Http\Controllers\ThreadController@article_create');

Route::get('/thread/{thread}', function (Thread $thread) {
    $data['thread']=Thread::find($thread["id"]);
    $data['chats'] = Chat::where('thread_id',$thread["id"])->get();
    $data['admin']=0;
    return view('show',$data);
});
Route::get('/admin/thread/{thread}/delete', 'App\Http\Controllers\ThreadController@thread_delete');
Route::get('/admin/chat/{thread}/delete', 'App\Http\Controllers\ThreadController@chat_delete');

Route::get('/admin/thread/{thread}', function (Thread $thread) {
    $data['thread']=Thread::find($thread["id"]);
    $data['chats'] = Chat::where('thread_id',$thread["id"])->get();
    $data['admin']=1;
    return view('admin_show',$data);
});
Route::get('/login',function(){
    $data['error1']=0;
    return view('login',$data);
});
Route::post('/auth','App\Http\Controllers\ThreadController@auth');
