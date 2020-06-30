<?php

namespace App\Http\Livewire\Program;

use App\Balai;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BalaiUsulanList extends Component
{
    // public mount (Balai $balai)
    // {

    // }
    public function render()
    {
        $databalaiusulan = Balai::join('paket', 'paket.balai_id', 'balai.id')
            ->selectRaw('paket.ta as paketta,balai.nmbalai,sum(pagurmp) as sumpagu,balai_id')
            ->where('balai.wilayah_id', 3)
            ->groupBy('paket.balai_id')
            ->where('paket.ta', 2021)
            ->get();
        //dd($databalaiusulan);
        return view('livewire.program.balai-usulan-list', compact('databalaiusulan'));
    }
}
