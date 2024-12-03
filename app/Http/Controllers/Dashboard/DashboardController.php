<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\poems;
use  App\Models\book;
use  App\Models\categorie;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pomesCount = poems::count();
        $bookCount = book::count();
        $categorieCount = categorie::count();
        return view('dashboard.index',compact('pomesCount','bookCount','categorieCount'));
    }

    
}
