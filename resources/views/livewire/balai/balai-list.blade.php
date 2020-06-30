<div class="container">
    {{-- <div>
        <div class="absolute inset-y-0 py-5 px-10 right-0 md:w-5/12">
            <input wire:model.debounce.500ms="search" type="text"
                class="bg-gray-200 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search...">

            <div class="absolute mt-3 top-0">
                <svg class="fill-current w-4 text-gray-500 mt-4 ml-2" viewBox="0 0 24 24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>
        </div>
    </div> --}}

    <div class="py-0">
        <h1 class="capitalize text-lg text-cool-gray-700 mb-5 font-bold text-center">Daftar Balai</h1>
        <table class="shadow-lg bg-white">
            <thead>
                <tr>
                    <th class="bg-indigo-300 border px-4 py-2">No</th>
                    <th class="bg-indigo-300 border px-4 py-2">Nama Balai</th>
                    <th class="bg-indigo-300 border px-4 py-2">Pagu</th>
                    <th class="bg-indigo-300 border px-4 py-2">Keuangan</th>
                    <th class="bg-indigo-300 border px-4 py-2">Progres Keuangan</th>
                    <th class="bg-indigo-300 border px-4 py-2">Progres Fisik</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ $sumpagupaket }} --}}
                @foreach($databalai as $no => $row)
                <tr>
                    <td class="border px-4 py-2">{{$no+1}}</td>
                    <td class="border px-4 py-2"><a href={{ route('balai-paket-list',$row->id)}}>{{$row->nmbalai}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{number_format($row->sumpagu)}}</td>
                    <td class="border px-4 py-2 text-right">
                        {{number_format($row->sumpagu)== 0 ? 0 :number_format($row->sumkeu)}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{number_format($row->sumpagu) == 0 ? 0 : number_format((($row->sumkeu/$row->sumpagu)*100),2)}}
                    </td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->avgfisik,2)}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td class="border px-4 py-2 text-right">Jumlah</td>
                    <td class="border px-4 py-2 text-right">{{ number_format($databalai->sum('sumpagu'),2) }}</td>
                    <td class="border px-4 py-2 text-right">{{ number_format($databalai->sum('sumkeu'),2) }}</td>
                    <td class="border px-4 py-2 text-right">
                        {{ number_format($databalai->avg('sumkeu')/$databalai->avg('sumpagu')*100,2) }}</td>
                    <td class="border px-4 py-2 text-right">{{ number_format($databalai->avg('avgfisik'),2) }}</td>
                </tr>
            </tfoot>
        </table>
        <div>
        </div>
    </div>
    </>

    {{-- <style>
    li {
        display: inline;
    }
</style> --}}