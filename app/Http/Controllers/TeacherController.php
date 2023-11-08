<?php

namespace App\Http\Controllers;
use App\Models\Teacher; 
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show_data_teacher(){

        $teacher_data = Teacher::all();
        return view('teacher', ['teacher_data'=>$teacher_data]);
    }
}
