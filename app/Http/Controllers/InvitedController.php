<?php

namespace App\Http\Controllers;

use App\Exports\InvitedExport;
use App\Http\Requests\StoreInvitedRequest;
use App\Mail\InviteMail;
use App\Models\Invited;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class InvitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inviteds = Invited::all();
        return view('Invited.index',compact('inviteds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Invited.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        return Excel::download(new InvitedExport(),'Invited.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvitedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvitedRequest $request)
    {
        Mail::to($request->email)->send(new InviteMail);
        $invited = Invited::create($request->validated());
        return redirect()->route('inviteds.index')->with('success','Invite created successfully');
    }
}
