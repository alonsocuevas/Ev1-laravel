<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $authenticated_user = Auth::user();
        return View('admin.home')->with(['user' => $authenticated_user]);
    }

    public function showConocenos()
    {
        return View('admin.conocenos');
    }

    public function mostrarDatos()
    {
        $cafes = DB::table('products')->where('category', 'Cafe')->get();
        $pasteleria = DB::table('products')->where('category', 'pasteleria')->get();
        $sandwich = DB::table('products')->where('category', 'sandwich')->get();
        return view('admin.home', compact('cafes', 'pasteleria', 'sandwich'));
    }
}