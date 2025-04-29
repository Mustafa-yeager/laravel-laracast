<?php

namespace App\Http\Controllers;

use App\Models\job_list;
use Illuminate\Http\Request;

class job_ListController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_list = job_list::with('contact2')->latest()->cursorPaginate(4);
        return view('job_list',['job_list'=>$job_list]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_create');

    }






    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'title'=>['required','min:3'],
            'salary'=>['required']
        ])
        ;

         job_list::create([
            'title'=>request('title'),
            'salary'=>request('salary'),
            'contact2_id'=>1
         ]);

         return redirect('/job_list');
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    $jobs_list = job_list::find($id);
    return view('job_list2',['jobs_list'=>$jobs_list]);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    $jobs_list = job_list::find($id);
    return view('job_edit',['jobs_list'=>$jobs_list]);

    }




/**
     * Update the specified resource in storage.
     */

public function update( string $id)
    {
         //validate
request()->validate([
    'title'=>['required','min:3'],
    'salary'=>['required']
]);

//update the job
$editJob = job_list::findOrFail($id);

$editJob->update([
    'title'=>request('title'),
    'salary'=>request('salary')
]);

// redirect to thee job page

return redirect('/job_list/'.$editJob->id);
    }





     /**
     * Remove the specified resource from storage.
     */
 public function destroy(string $id)
    {
        $jobDelete = job_list::findOrFail($id);
        $jobDelete->delete();
        return redirect('/job_list');
    }
}
