<?php
namespace App\Http\Controllers;

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Models\Student;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function index()
{
    return view('students.index');
}

public function getStudents()
{
    $data = Student::select('*');

    return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function($row){
            return '
                <a href="/students/'.$row->id.'/edit" class="btn btn-sm btn-primary">Edit</a>
                <a href="/students/'.$row->id.'" class="btn btn-sm btn-danger">Delete</a>
            ';
        })
        ->rawColumns(['action'])
        ->make(true);
}
}