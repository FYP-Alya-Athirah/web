<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class FirebaseController extends Controller{
    public function index()
    {
    }
    public function createStudent($fullname,$icnumber,$gender,$classname,$pickup){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/school-system-firebase-firebase-adminsdk-loj4c-dc07944a24.json')
        ->withDatabaseUri('https://school-system-firebase-default-rtdb.firebaseio.com/');
        $database = $factory->createDatabase();
        $newPost = $database
        ->getReference('blog/users')
        ->push([
        // 'id' => ,
        'fullname' => $fullname,
        'ic_number' => $icnumber,
        // 'birthday' => ,
        'gender' => $gender,
        'class' => $classname,
        'pickup_schedule' => $pickup
        ])
        ;
        // echo '<pre>';
        // print_r($newPost->getvalue());
    }
}

