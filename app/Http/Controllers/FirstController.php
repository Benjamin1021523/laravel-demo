<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * First web
     */
    public function index()
    {
        return 'hello Laravel!';
    }
}
