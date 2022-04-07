<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();

        foreach ($units as $unit) {
            $teachers = $unit->instructors;
            $semesters = $unit->semesters;
            $results = $unit->results;
            
            foreach ($teachers as $teachers) {
                $teachers->user->profile;
            }
            
            foreach ($semesters as $semester) {
                $semester->course;
            }
            
            foreach ($results as $result) {
                $result->student;
            }
        }

        return $units;
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
		
		return Unit::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        $teachers = $unit->instructors;
        $semesters = $unit->semesters;
        $results = $results = $unit->results;
        
        foreach ($teachers as $teachers) {
            $teachers->user->profile;
        }
        
        foreach ($semesters as $semester) {
            $semester->course;
        }
        
        foreach ($results as $result) {
            $result->student;
        }
        return $unit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_unit = Unit::find($id);
		$update_unit->update($request->all());
		return $update_unit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Unit::destroy($id);
    }
	
	public function search($name)
    {
        return Unit::where('name', 'like', '%'.$name.'%')->get();
    }
}
