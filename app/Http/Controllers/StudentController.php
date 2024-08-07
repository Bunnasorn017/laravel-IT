<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student() {
        // $students = student::all();
        // $students = student::find(3);
        // $students = student::where('advisor_id',1)->get();
        
        // $students = student::select('Name','deparment')
        // ->where('advisor_id',1)
        // ->orderby('Name','desc')
        // ->get();

        // $students = student::pluck('name');
        // $students = student::count('name');
        // $students = student::sum('age');
        // $students = student::avg('age');
        // $students = student::max('age');
        $students = student::select(student::raw('count(*) as stu_count, advisor_id'))
        ->groupby('advisor_id')
        ->get();
        return ($students);
        
        // return view('student',compact('students'));
    }
}