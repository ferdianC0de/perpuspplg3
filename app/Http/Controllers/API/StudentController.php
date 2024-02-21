<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public static function all(){
        $data = Student::all();
        return response()->json([
            'message' => "Ambil Data Berhasil",
            'data' => $data
        ]);
    }

    public static function store(Request $request){
        $student = new Student();
        $student->nis = $request->nis;
        $student->nama = $request->nama;
        $student->umur = $request->umur;
        $student->alamat = $request->alamat;
        $student->class_id = $request->class_id;

        $student->save();

        return response()->json([
            'message' => "Create Student Berhasil",
            'data' => $student
        ]);
    }

    public static function update(){
        return [];
    }

    public static function delete(){
        return [];
    }
}
