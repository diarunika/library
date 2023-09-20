<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Ebook;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $ebooks = Ebook::all();
        $categories = category::all();
        return view('index', compact(['ebooks', 'categories']));
    }
}
