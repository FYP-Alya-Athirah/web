<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('students');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->fullname = $request->fullname;
        $post->icnumber = $request->icnumber;
        $post->gender = $request->gender;
        $post->classname = $request->classname;
        $post->pickup = $request->pickup;
        $post->save();
        return redirect('students')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
