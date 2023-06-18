<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index');
    }
}
