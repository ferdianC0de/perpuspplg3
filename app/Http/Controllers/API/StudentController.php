<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\DB;

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

    public static function update(Request $request, $id){
        $student = DB::select(
            DB::raw("update students set nama = '$request->nama',
            updated_at = now() where id = '$id' "));

        $updated = Student::find($id);

        return $updated;
    }

    public static function delete(Request $request, $id){
        try {
            $student = Student::destroy($id);

            if ($student) {
                return "Data Berhasil dihapus";
            }else{
                throw new Exception("Tidak ada data dengan id $id");
            }

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
