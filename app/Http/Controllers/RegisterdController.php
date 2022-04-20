<?php

namespace App\Http\Controllers;

use App\Exports\RegisterdExport;
use App\Http\Requests\StoreRegisterdRequest;
use App\Http\Requests\UpdateRegisterdRequest;
use App\Models\Invited;
use App\Models\Registerd;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RegisterdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $registerds = Registerd::all();
        return view('Registerd.index',compact('registerds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registerd.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Registerd $registerd)
    {
        return view('Registerd.edit',compact('registerd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegisterdRequest $request,Registerd $registerd)
    {
        $registerd->update($request->validated());
        return redirect()->back()->with('success','Car updated successfully');
    }


    public function export()
    {
        return Excel::download(new RegisterdExport(),'Registerd.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegisterdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegisterdRequest $request)
    {
        $checkifinvited=Invited::where('email',$request->email)->first();
        $checkiregister=Registerd::where('email',$request->email)->first();
        $lastseat=Registerd::latest('id')->pluck('id')->first();

        if ($checkifinvited && !$checkiregister) {
            $registerd = Registerd::create($request->validated()+['seat_num'=>$lastseat+1]);
            $checkifinvited->update(['confirmed'=>true]);
            return redirect()->back()->with('success','Registerd successfully');
        }
        elseif ($checkifinvited && $checkiregister) {
            return redirect()->back()->with('error','you are already registerd');
        }
        return redirect()->back()->with('error','your not invited');
    }
}
