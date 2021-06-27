<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller {

    public function viewWelcome() {
        $universities = University::all();
        return view('welcome', compact('universities'));
    }
    public function viewVision() {
        return view('vision');
    }
    public function viewContact() {
        return view('contact');
    }
}
