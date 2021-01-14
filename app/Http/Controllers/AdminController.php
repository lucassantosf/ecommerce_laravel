<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.index');
    }

    public function destroy(Request $request){ 
        Auth::guard('admin')->logout();
        return redirect()->route("admin.login");
    }
}