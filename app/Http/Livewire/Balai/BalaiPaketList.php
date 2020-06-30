<?php

namespace App\Http\Livewire\Balai;

use App\Balai;
use App\Paket;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class BalaiPaketList extends Component
{
    use WithPagination;
    //public $databalaipaket;
    public $balai_id;

    public function mount($id)
    {
        $this->databalaipaket = Paket::with('progres', 'balai', 'satker', 'kodeoutput', 'satoutcome', 'satoutput', 'fnf', 'ks', 'apbnsbsn', 'sycmyc', 'desa', 'kabupaten', 'provinsi', 'kecamatan')
            ->where([
                'balai_id' => $id,
                'ta' => 2020
            ])
            ->paginate(10);
        $this->databalai = Balai::find($id)->get();
        $this->balai_id = $id;
        $this->databalaipaketrekap = DB::table('paket')
            ->join('progres', 'progres.paket_id', '=', 'paket.id')
            ->where('paket.balai_id', $id)
            ->where('ta', 2020)
            ->get();
    }

    public function render()
    {
        return view('livewire.balai.balai-paket-list', [
            'databalai' => Balai::where('wilayah_id', 3)->find($this->balai_id),
            'databalaipaketrekap' => DB::table('paket')
                ->join('progres', 'progres.paket_id', '=', 'paket.id')
                ->where('paket.balai_id', $this->balai_id)
                ->where('ta', 2020)
                ->get(),
            'databalaipaket' => Paket::with('progres', 'balai', 'satker', 'kodeoutput', 'satoutcome', 'satoutput', 'fnf', 'ks', 'apbnsbsn', 'sycmyc', 'desa', 'kabupaten', 'provinsi', 'kecamatan')
                ->where([
                    'balai_id' => $this->balai_id,
                    'ta' => 2020
                ])
                ->orderBy('kdoutput', 'asc')
                ->paginate(10)
        ]);
    }
}
