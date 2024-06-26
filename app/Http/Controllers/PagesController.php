<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Design_Images;
use App\Models\Niche;
use App\Models\User;
use Illuminate\Support\Facades\DB;

ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');

class PagesController extends Controller
{
    public function signin()
    {
        if (session()->has('user_added')) {
            return redirect('/dashboard');
        } else {
            return view('Authentication.signin');
        }
    }
    public function forget()
    {
        return view('Authentication.forget');
    }
    public function reset()
    {
        return view('Authentication.reset');
    }
    public function dashboard()
    {
        $user = User::where("id", session()->get("user_added"))->first();
        $compact = compact("user");
        return view('Pages.dashboard')->with($compact);
    }
    public function profile()
    {
        $user = User::where("id", session()->get("user_added"))->first();
        $compact = compact("user");
        return view('Pages.profile')->with($compact);
    }
}
