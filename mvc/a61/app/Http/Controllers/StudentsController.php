<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStudentsRequest;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students')->with([
            'students' => Students::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Students();
        $students->idstudents = $request->txtid;
        $students->fullname = $request->txtfullname;
        $students->gender = $request->txtgender;
        $students->emailaddress = $request->txtemail;
        $students->phone = $request->txtphone;
        $students->address = $request->txtaddress;
        $students->save();

        return redirect('students')->with('msg', 'Add New Student Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
    }
}
