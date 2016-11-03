<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
       // $messages = Message::all();
       // dd($messages);
    	$data = [
            //'message' => Message::all(),
            //'message' => Message::orderBy('created_at','desc')->get(),
            //'message' => Message::latest()->get(),
            'message' => Message::latest()->paginate(3),
            'count' => Message::count()
    	];
    	return view('pages.messages.index', $data);
    }

    public function edit($id)
    {
    	//dd($id);
        $msg = Message::find($id);
        return view('pages.messages.edit')->with('msg',$msg);
    }
    
    public function update($id)
    {
        $msg = Message::findOrFail($id);
        $input = Request::all();
        $msg->fill($input)->save();
        return redirect('/');
    }

    public function create()
    {
        $input = Request::all();
        $msg = new Message();
        $msg->name=$input['name'];
        $msg->email=$input['email'];
        $msg->message=$input['message'];
        $msg->save();
        
    	$data = [
            'message' => Message::latest()->paginate(3),
            'count' => Message::count()
    	];
        
        return view('pages.messages.index', $data);

    }
    
    public function delete($id)
    {
        Message::findOrFail($id)->delete();
        return redirect('/');
    }
}
