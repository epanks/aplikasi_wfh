<div class="container">

    <div class="py-0">
        <h1 class="capitalize text-lg text-cool-gray-700 mb-5 font-bold text-center">Daftar Balai</h1>
        <table class="shadow-lg bg-white">
            <thead>
                <tr>
                    <th class="bg-indigo-300 border px-4 py-2">No</th>
                    <th class="bg-indigo-300 border px-4 py-2">Nama Balai</th>
                    <th class="bg-indigo-300 border px-4 py-2">Pagu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($databalaiusulan as $no => $row)
                <tr>
                    <td class="border px-4 py-2">{{$no+1}}</td>
                    <td class="border px-4 py-2">{{$row->nmbalai}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{number_format($row->sumpagu)}}</td>
                    {{-- <td class="border px-4 py-2 text-right">{{number_format($row->progres->sum('keuangan'))}}</td>
                    <td class="border px-4 py-2 text-right">
                        {{number_format((($row->progres->sum('keuangan')/$row->paket->sum('pagurmp'))*100),2) == 0 ? 0 : number_format((($row->progres->sum('keuangan')/$row->paket->sum('pagurmp'))*100),2)}}
                    </td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->progres->avg('fisik'),2)}}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
    </div>
</div>