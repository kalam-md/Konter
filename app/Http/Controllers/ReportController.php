<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function indexHarian() {
        return view('report.harian');
    }

    public function indexAll() {
        return view('report.all');
    }
}
