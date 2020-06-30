<?php

namespace App\Http\Livewire\Paket;

use Illuminate\Http\Request;
use App\Paket;
use Livewire\Component;
use Livewire\WithPagination;

class PaketList extends Component
{
    use WithPagination;

    public $search;

    // public $nmpaket;
    // public $pagurmp;
    // public $ta;
    // public $kdoutput;
    // public $sycmyc_id;
    // public $ks_id;
    // public $trgoutput;
    // public $satoutput_id;
    // public $ppk_id;
    // public $apbnsbsn_id;
    // public $fnf_id;
    // public $trgoutcome;
    // public $satoutcome_id;
    // public $databalai;
    // public $balai_id;
    // public $kdsatker;
    // public $datasatoutput;
    // public $datappk;
    // public $dataks;
    // public $datasycmyc;
    // public $dataoutput;
    // public $datasatoutcome;
    // public $updateMode = false;

    // public function edit($id)
    // {
    //     $editpaket = Paket::findOrFail($id);
    //     $this->paket_id = $id;
    //     $this->nmpaket = $editpaket->nmpaket;
    //     $this->pagurmp = $editpaket->pagurmp;
    //     $this->ta = $editpaket->ta;
    //     $this->trgoutput = $editpaket->trgoutput;
    //     $this->satoutput_id = $editpaket->satoutput_id;
    //     $this->trgoutcome = $editpaket->trgoutcome;
    //     $this->satoutcome_id = $editpaket->satoutcome_id;
    //     $this->ppg_id = $editpaket->ppg_id;
    //     $this->satoutcome_id = $editpaket->satoutcome_id;
    //     $this->balai_id = $editpaket->balai_id;
    //     $this->kdsatker = $editpaket->kdsatker;
    //     $this->kdoutput = $editpaket->kdoutput;
    //     $this->kdprovinsi = $editpaket->kdprovinsi;
    //     $this->kdkabupaten = $editpaket->kdkabupaten;
    //     $this->kdkecamatan = $editpaket->kdkecamatan;
    //     $this->kddesa = $editpaket->kddesa;
    //     $this->wilayah_id = $editpaket->wilayah_id;
    //     $this->fnf_id = $editpaket->fnf_id;
    //     $this->ks_id = $editpaket->ks_id;
    //     $this->apbnsbsn_id = $editpaket->apbnsbsn_id;
    //     $this->sycmyc_id = $editpaket->sycmyc_id;
    // }

    // public function update(Request $request, $id)
    // {
    //     $updatepaket = Paket::find($id);
    //     $updatepaket->update($request->all());

    //     return redirect()->back();
    // }

    // public function delete($id)
    // {
    //     Paket::find($id)->delete();
    //     session()->flash('message', 'Paket Deleted Successfully.');
    // }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $dataSearch = Paket::with('progres')
            ->where('nmpaket', 'like', $searchTerm)
            ->where('wilayah_id', 3)
            ->where('ta', 2020)
            ->paginate(10);
        //dd($dataSearch);
        //$datapaket = Paket::paginate(10);
        return view('livewire.paket.paket-list', [
            'datapaket' => $this->search === null ? Paket::with('progres')->where('wilayah_id', 3)->where('ta', 2020)->paginate(10) : $dataSearch
        ]);
    }
}
