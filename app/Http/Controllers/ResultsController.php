<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Results::all();
        foreach ($results as $result) {
            $student = $result->student;
            $student->course;
            $unit = $result->unit;
            $teacher = $unit->instructor->user;
            $teacher_profile = $teacher->profile;
        }
        
        return $results; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
		
		return Results::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function show(Results $results)
    {
        return Results::find($results);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_results = Results::find($id);
		$update_results->update($request->all());
		return $update_results;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Results::destroy($id);
    }
	
	public function search($name)
    {
        return Results::where('name', 'like', '%'.$name.'%')->get();
    }
}
