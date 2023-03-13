<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PickupController extends Controller
{
    // Index
    public function index() {
        return view('operator.pickup');
    }
}
