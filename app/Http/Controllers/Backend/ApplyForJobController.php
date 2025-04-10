<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ApplyForJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApplyForJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applyForJobs=ApplyForJob::latest()->get();
        return view('dashboard.applyForJobs.index',['applyForJobs'=>$applyForJobs]);
    }

    public function sendEmail(Request $request)
    {

       $applyForJob=ApplyForJob::findOrFail($request->id);

        $data = [
            'name' => $applyForJob->name,
            'message' => $applyForJob->message,
        ];
        //Mail::to('recipient@example.com')->send(new SendEmailapplyForJobWithUser($data));

        //$applyForJob->delete();

        session()->flash('success', __('Email sent successfully.'));

        return redirect()->route('dashboard.applyForJobs.index');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $applyForJob=ApplyForJob::findOrFail($id);
        return view('dashboard.applyForJobs.show',compact('applyForJob'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $applyForJob=ApplyForJob::findOrFail($id);
        $applyForJob->delete();
        Session::flash('success','Operation accomplished successfully');
        return redirect()->back();
    }
}
