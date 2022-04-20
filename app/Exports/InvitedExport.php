<?php

namespace App\Exports;

use App\Models\Invited;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvitedExport implements FromView
{
    
    public function view(): View
    {
        return view('Invited.tabel', ['inviteds'=>Invited::all()]);
    }
}
