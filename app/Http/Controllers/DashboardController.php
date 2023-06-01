<?php

namespace App\Http\Controllers;

use App\Models\Vine;
use App\Models\Wine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){

        return view('admin.dashboard');
    }
}
