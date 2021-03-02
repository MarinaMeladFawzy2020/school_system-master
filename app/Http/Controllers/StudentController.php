<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Student::get();
        // $students = Student::lastest()->paginate(5);
        // return view('students.index' , compact('students'))
        // ->with('i',(request()->input('page',1) -1) * 5);

        $students = Student::get();
        return view('students.index' , compact('students'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required' ,
                'email' => 'required' ,
                'rooms_id' => 'required',
            ]);
            Student::create([
                'name' => $request->name ,
                'email' => $request->email ,
                'rooms_id' => $request->rooms_id ,
            ]);
            return redirect()->route('students.index')
            ->with('success' , 'Student Created Successfully .');
  }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Student  $student
//      * @return \Illuminate\Http\Response
//      */
        public function show(Student $student)
        {
            // return view('students.show' , compact('student'));
        }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Student  $Student
//      * @return \Illuminate\Http\Response
//      */
        public function edit(Student $student)
        {
            return view('students.edit' , compact('student'));
        }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Student  $Student
//      * @return \Illuminate\Http\Response
//      */
        public function update(Request $request, Student $student)
        {
            $request->validate([
                
            ]);
            $student->update($request->all());
            return redirect()->route('students.index')
            ->with('success' , 'Student Update Successfully .');
    }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Student  $Student
//      * @return \Illuminate\Http\Response
//      */
        public function destroy(Student $student)
        {
            $student->delete();
            return redirect()->route('students.index')
            ->with('success' , 'Student deleted Successfully .');
        }
}