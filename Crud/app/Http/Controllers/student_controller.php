<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course_model;
use App\student_model;

class student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$courses = Course_model::All();
        return view('addStudents_view',['courses'=>$courses]);
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
               'name'=>'required|alpha',
               'course'=>'required|integer',
               'code'=>'required|alpha',
               'branch'=>'required|alpha',
			   'phone' => 'required|digits:10']);
		$sql = Student_model::create([
				'name' => $request->name,
				'course_id' => $request->course,
				'code' => $request->code,
				'branch' => $request->branch,
				'phone' => $request->phone]);
				
		if($sql) {
           return redirect()->route('students.create')->with('success','Students Added Successfully');
		}
		return back()->withInput();
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
    }
}
