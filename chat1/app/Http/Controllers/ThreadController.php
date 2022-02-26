<?php

namespace App\Http\Controllers;
use App\Models\thread;
use App\Models\chat;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ThreadController extends BaseController
{
    public function create(Request $request){
        $thread=Thread::create([
            'title' => $request->title
        ]);
        return redirect('/');

    }
    public function article_create(Request $request ,$id){
        $thread=Chat::create([
            'article' => $request->article ,
            'thread_id' => $id
        ]);
        return redirect( url("/thread/$id"));

    }
    public function auth(Request $request){
        $data=$request;
        if($request["pass"]=="123"){
            return redirect(url("/admin"));
        }
        else{
            $data["error1"]=1;
            return view('login',$data);
        }
    }
    public function thread_delete($id){
        Chat::where('thread_id', $id)->delete();
        Thread::where('id',$id)->delete();
        return redirect("/admin");
    }
    public function chat_delete($id){
        $chat_id=$id;
        $tmp=Chat::where('id',$id)->first(['thread_id']);
        $thread_id=$tmp['thread_id'];
        Chat::where('id', $id)->delete();
        return redirect( url("/admin/thread/$thread_id"));
    }
}
