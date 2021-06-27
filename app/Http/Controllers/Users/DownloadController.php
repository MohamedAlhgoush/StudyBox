<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DownloadController extends Controller {
    public function myDownloads() {
        $user = Auth::user();
        $downloads = $user->downloads;
        
        return view('users.shared.my_downloads', compact('downloads'));
    }

}
