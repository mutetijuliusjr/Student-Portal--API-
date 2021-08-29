<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return School::all();
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
		
		return School::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //dump(School::find($school)->departments()->name);
        return School::find($school);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        #$update_school = School::find($school);
        $update_school = School::find($id);
		$update_school->update($request->all());
		return $update_school;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return School::destroy($id);
    }
    
    /**
     * Search for the specified resource from storage.
     *
     * @param  $name
     * @return \Illuminate\Http\Response
     */
	public function search($name)
    {
        return School::where('name', 'like', '%'.$name.'%')->get();
    }
}
