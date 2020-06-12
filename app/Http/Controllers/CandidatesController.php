<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\User;
use App\Status;

// full name is "App\Http\Controllers\CandidatesController"; 
class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $candidates = Candidate::all();
        $users = User::all();
        $statuses = Status::all();        
        return view('candidates.index', compact('candidates','users', 'statuses'));
    }

    public function changeUser($cid, $uid = null){
        $candidate = Candidate::findOrFail($cid);
        $candidate->user_id = $uid;
        $candidate->save(); 
        return redirect('candidates');
    }

    public function changeStatus($cid, $sid)
    {
        $candidate = Candidate::findOrFail($cid);
        $from = $candidate->status->id;
        if(!Status::allowed($from,$sid)) return redirect('candidates');        
        $candidate->status_id = $sid;
        $candidate->save();
        return redirect('candidates');
    }          


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidate = new Candidate();
        //$candidate->name = $request->name; 
        //$candidate->email = $request->email;
        $can = $candidate->create($request->all());
        $can->status_id = 1;
        $can->save();
        return redirect('candidates');
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
        $candidate = Candidate::findOrFail($id);
        return view('candidates.edit', compact('candidate'));
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
       $candidate = Candidate::findOrFail($id);
       $candidate->update($request->all());
       return redirect('candidates');  
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete(); 
        return redirect('candidates'); 
    }
}
