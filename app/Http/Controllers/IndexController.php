<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    function test (User $user)
    {
        echo $user->find(1)->email;
    }
}
