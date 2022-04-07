<?php

namespace App\Http\Controllers;

//use App\Models\Course;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters = Semester::all();
        
        foreach ($semesters as $semester) {
            $semester->units;
            $semester->course;
        }

        return $semesters;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {		
		return Semester::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        $units = $semester->units;
        $course = $semester->course;
        return compact('semester');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_semester = Semester::find($id);
		$update_semester->update($request->all());
		return $update_semester;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Semester::destroy($id);
    }
	
	public function search($code)
    {
        return Semester::where('code', 'like', '%'.$code.'%')->get();
    }
}
