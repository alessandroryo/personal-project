<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Report $report)
    {
        $subjects = Subject::where('report_id', $report->id)->get();

        return view('subjects.index', compact('subjects', 'report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Report $report)
    {
        return view('subjects.create', compact('report'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Report $report, Request $request)
    {
        Subject::create($this->validateSubjects($request));
        return redirect(route('subjects.index', compact('report')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report, Subject $subject)
    {
        return view('subjects.show', compact('report', 'subject'));
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

    public function validateSubjects($request)
    {
        return $request->validate([
            'report_id' => 'required',
            'subject_name' => 'required|string',
            'passing_grade' => 'required|integer|min:0|max:100',
        ]);
    }
}
