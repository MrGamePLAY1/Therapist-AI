<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function roadmap()
    {
        return view('roadmap');
    }

    public function about()
    {
        return view('about');
    }
}