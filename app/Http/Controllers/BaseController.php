<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Project;

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
        $createddays = Project::whereMonth('created_at', $month)
        ->whereYear('created_at', $year)
        ->pluck('created_at')
        ->map(function($days){
            return $days->day;
        });
        $updateddays = Project::whereMonth('updated_at', $month)
        ->whereYear('updated_at', $year)
        ->whereColumn('updated_at', '!=', 'created_at')
        ->pluck('updated_at')
        ->map(function($days){
            return $days->day;
        });

        return view("home", compact('lable','month', 'year', 'startofmonth','days', 'createddays', 'updateddays'));
    }
    public function about()
    {
        return view('about');
    }
}
