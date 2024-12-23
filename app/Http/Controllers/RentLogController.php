<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentLogs;

class RentLogController extends Controller
{
    public function index(){
        $rentLogs = RentLogs::with(['user', 'book'])->get();
        return view('rentlog', ['rent_logs' => $rentLogs]);
    }
}
