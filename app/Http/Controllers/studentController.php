<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cne' =>'required',
            'firstname' =>'required',
            'secondname' =>'required',
            'age' =>'required',
            'speciality' =>'required',

        ]);

        Student::create([
            'cne'=>$request->cne,
            'firstName' =>$request->firstname,
            'secondName'=>$request->secondname,
            'age'=>$request->age,
            'speciality'=>$request->speciality
        ]);

        return redirect('/')->with('msg', 'Student has been add successfuly!..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' =>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' =>'edit']);
        //return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id);
        // $student = new Student();
        $student->cne = $request->cne;
        $student->firstName = $request->firstname;
        $student->secondName = $request->secondname;
        $student->age = $request->age;
        $student->speciality = $request->speciality;
        $student->save();
        return redirect('/');
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $student = Student::find($id);
        $student = Student::whereId($id)->firstOrFail();
        $student->delete();
        return redirect('/');
    }
}
