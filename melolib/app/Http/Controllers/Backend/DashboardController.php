<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        echo 'welcome to admin';
        //dd($_SESSION['status']);
        //add admin view files
    }
    public function executive(){
        echo 'welcome to executive';
        //add executive view files
    }
    public function user(){
        echo 'welcome to user';
        //add user view files
    }
}
