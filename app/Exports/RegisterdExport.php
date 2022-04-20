<?php

namespace App\Exports;

use App\Models\Registerd;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegisterdExport implements FromView
{
    public function view(): View
    {
        return view('Registerd.tabel', ['registerds'=>Registerd::all()]);
    }
}
