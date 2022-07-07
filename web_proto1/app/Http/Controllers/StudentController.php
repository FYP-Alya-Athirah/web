<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }
    public function store(Request $request)
    {
        $post = new Students;
        $post->fullname = $request->fullname;
        $post->icnumber = $request->icnumber;
        $post->gender = $request->gender;
        $post->classname = $request->classname;
        $post->pickup = $request->pickup;
        $post->attendance = 0;
        $post->save();
        return redirect('students')->with('status', 'New Student Added');
    }
    public function update(Request $request){
        $post = Students::find($request->idedit);

        $post->fullname = $request->fullnameedit;
        $post->icnumber = $request->icnumberedit;
        $post->gender = $request->genderedit;
        $post->classname = $request->classnameedit;
        $post->pickup = $request->pickupedit;
        // $post->attendance = 1;
        
        $post->save();
        return redirect('students');
    }

    public function delete(Request $request){
        Students::destroy($request->idedit);
        return redirect('students');
    }
    // public function read(Request $request){
    //     $post = Students::find($request->$id);
    //     return $post;
    // }
    public function read($request){
        $post = Students::find($request->$id);
        return $post;
    }
    public function edit_page($id){
        // return redirect('students')->with('edit_form', $id);
        $post = Students::find($id);
        return redirect('students')->with('edit_form', $post);
        // return view('students')->with('edit_form', $post);
    }
}
