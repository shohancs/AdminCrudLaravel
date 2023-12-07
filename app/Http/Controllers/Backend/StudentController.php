<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readStudent = Student::orderby('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.student_pages.manage', compact('readStudent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.student_pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addStudent = new Student;

        $addStudent->name    = $request->name;
        $addStudent->slug    = Str::slug($addStudent->name);
        $addStudent->fname   = $request->fname;
        $addStudent->mname   = $request->mname;
        $addStudent->email   = $request->email;
        $addStudent->phone   = $request->phone;
        $addStudent->address = $request->address;
        $addStudent->status  = $request->status;

        $addStudent->save();
        return redirect()->route('student.manage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editStudent = Student::find($id);

        if (!is_null($editStudent)) {
            $editStudent = Student::where('id', $editStudent->id)->first();
            return view('backend.pages.student_pages.edit', compact('editStudent'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateStudent = Student::find($id);

        if (!is_null($updateStudent)) {
            $updateStudent->name    = $request->name;
            $updateStudent->slug    = Str::slug($updateStudent->name);
            $updateStudent->fname   = $request->fname;
            $updateStudent->mname   = $request->mname;
            $updateStudent->email   = $request->email;
            $updateStudent->phone   = $request->phone;
            $updateStudent->address = $request->address;
            $updateStudent->status  = $request->status;

            $updateStudent->save();
            return redirect()->route('student.manage');
        }
    }


    /**
     * Display a trash listing of the resource.
     */
    public function managetrash()
    {
        $trashStudent = Student::orderby('name', 'asc')->where('status', 0)->get();
        return view('backend.pages.student_pages.trash_manage', compact('trashStudent'));
    }

    /**
     * Soft Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $trashData = Student::find($id);

        if (!is_null($trashData)) {
            $trashData->status = 0;

            $trashData->save();
            return redirect()->route('student.manage');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroyStudent = Student::find($id);

        $destroyStudent->delete();
        return redirect()->route('student.manage');
    }
}
