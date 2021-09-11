<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;
use App\Models\Classes;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subjects::latest()->paginate(5);
    
        return view('subjects.index',compact('subjects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ClassSubject = Classes::all();
        return view('subjects.create' , ['ClassSub' => $ClassSubject]);
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
            'class'=> 'required',
            'subject'=> 'required',

        ]);

        Subjects::create($request->all());
        return redirect()->route('subjects.index')->with('success','Subject Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subjects $subject)
    {
        return view('subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjects $subject)
    {
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjects $subject)
    {
        $request->validate([
            'class'=> 'required',
            'subject'=> 'required',

        ]);

        Subjects::where('id', $subject->id)
        ->update([
            'class' => $request->input('class'),
            'subject' => $request->input('subject'),
            
        ]);
        // Students::update($request->all());
        return redirect()->route('subjects.index')->with('success','Subject Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjects $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('success','Subject Deleted Successfully!');
    }
}