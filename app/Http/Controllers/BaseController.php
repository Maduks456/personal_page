<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(Request $request)
    {
        $month = isset($request->month)? $request->month : now()->month;
        $year= isset($request->year)? $request->year: now()->year;
        $date =Carbon::createFromDate($year,$month,1);
        $startofmonth = $date->startOfMonth()->isoWeekday() - 1;
        $days = $date->daysInMonth;
        $lable = $date->format('F Y');
        return view("home", compact('lable','month', 'year', 'startofmonth','days'));
    }
    public function about()
    {
        return view('about');
    }
}
