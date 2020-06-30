<?php

namespace App\Http\Livewire\Balai;

use App\Balai;
use App\Paket;
use App\Progres;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class BalaiList extends Component
{
    // use WithPagination;

    // public $sumpagupaket;

    // public function mount()
    // {
    //     $this->sumpagupaket = Balai::with('paket')->selectRaw('sum(paket.pagurmp) as sumpagu')
    //         ->where('ta', 2020)
    //         ->where('wilayah_id', 3)
    //         ->groupBy('balai_id')
    //         ->get();
    // }

    public function render()
    {
        $sumpaket = Balai::join('paket', 'paket.balai_id', 'balai.id')
            ->join('progres', 'progres.paket_id', 'paket.id')
            ->selectRaw('paket.ta as paketta,balai.nmbalai,sum(pagurmp) as sumpagu,sum(keuangan) as sumkeu,avg(fisik) as avgfisik,balai.id')
            ->where('balai.wilayah_id', 3)
            ->groupBy('paket.balai_id')
            ->where('paket.ta', 2020)
            ->get();

        return view('livewire.balai.balai-list', [
            'databalai' => $sumpaket

        ]);
    }
}
