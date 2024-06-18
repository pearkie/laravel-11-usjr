<?php
namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Departments;
use App\Models\Colleges;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Students::with(['colleges', 'programs'])->get();
        return view('students.all', compact('students'));
    }

    public function showStudent($id)
    {
        $student = Students::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function showColleges()
    {
        $colleges = Colleges::all();
        return view('colleges', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = Colleges::with('departments')->findOrFail($id);
        return view('college', compact('college'));
    }

    public function showDepartments()
    {
        $departments = Departments::all();
        return view('departments', compact('departments'));
    }

}
?>