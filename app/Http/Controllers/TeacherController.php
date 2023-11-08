<?php

namespace App\Http\Controllers;
use App\Models\Teacher; 
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show_data_teacher(){
        $teacher_data = [];
        // $teacher_data = Teacher::all();


        // chunking result      
        // teacher::chunk(1, function($data){
        //     echo '<b>chunk of data</b><br>';
        //     foreach ($data as $teacher_data){
        //         echo $teacher_data->First;
        //         echo $teacher_data->Last.'<br>';
        //         echo $teacher_data->State.'<br>';
        //         echo $teacher_data->Pincode;
        //         echo '<br><br>';
        //     }
        // });



        // fetch single data  
        $teacher_data = teacher::where('id', '2')->first();     //  first means jab esa 2 id milagi to phali bar jo id 2 milagi usa fetch milaga..
        // return $user->toArray();
        return view('teacher', compact('teacher_data'));
    }
}
