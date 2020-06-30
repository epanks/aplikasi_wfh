<div class="container">
    {{-- <div>
        <div class="py-2 px-10 right-0 md:w-5/12">
            <input wire:model.debounce.500ms="search" type="text"
                class="bg-gray-200 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search...">

            <div class="mt-0 top-0">
                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>
        </div>
    </div> --}}

    <div class="py-0">
        <h1 class="capitalize text-lg text-cool-gray-700 mb-5 font-bold text-center">DAFTAR PAKET
            {{ $databalai->nmbalai }}
        </h1>
        <table class="shadow-lg bg-white">
            <thead class="bg-indigo-300 border px-4 py-2 font-bold">
                <tr>
                    <th>No</th>
                    <th>Nama Balai</th>
                    <th>Pagu</th>
                    <th>Keuangan</th>
                    <th>Progres Keuangan</th>
                    <th>Progres Fisik</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($databalaipaket->groupBy('kdoutput') as $kodeoutputgroup)
                {{-- @foreach ($collection as $item) --}}

                <tr class="bg-indigo-100">
                    <td class="border px-4 py-2 font-bold" colspan="2">
                        {{ $kodeoutputgroup[0]->kodeoutput->nmoutput }}
                    </td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    @foreach ($kodeoutputgroup as $row)
                <tr>
                    <td class="border px-4 py-2">
                        {{  $loop->index + 1 }}</td>
                    <td class="border px-4 py-2">{{$row->nmpaket}}</td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->pagurmp)}}</td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->progres->keuangan == 0 ? 0 : number_format($row->progres->keuangan)}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->pagurmp == 0 ? 0 : number_format((($row->progres->keuangan)/($row->pagurmp)*100),2)}}
                    </td>
                    <td class="border px-4 py-2 text-right">{{number_format(($row->progres->fisik),2)}}</td>
                    <td class="border px-4 py-2">
                        <a type="button" href="{{ route('paket-update', $row->id) }}"
                            class="flex justify-center h-6 px-4 py-0 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Edit
                        </a>
                        <button type="submit"
                            class="flex justify-center h-6 px-2 py-0 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
                </tr>
                {{-- <tr class="bg-gray-100 border px-4 py-2">
                    <td></td>
                    <td>Jumlah</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- @endforeach --}}
                @endforeach
            </tbody>
            {{-- <tfoot class="bg-indigo-100 border px-4 py-2 font-bold">
                <td class="border px-4 py-2 text-right"></td>
                <td class="border px-4 py-2 text-right"></td>
                <td class="border px-4 py-2 text-right">{{number_format($databalaipaketrekap->sum('pagurmp'))}}
            </td>
            <td class="border px-4 py-2 text-right">{{number_format($databalaipaketrekap->sum('keuangan'))}}
            </td>
            <td class="border px-4 py-2 text-right">
                {{number_format((($databalaipaketrekap->sum('keuangan'))/($databalaipaketrekap->sum('pagurmp'))*100),2)}}
            </td>
            <td class="border px-4 py-2 text-right">
                {{number_format(($databalaipaketrekap->avg('fisik')),2)}}
            </td>
            <td></td>
            </tfoot> --}}
        </table>
        {{ $databalaipaket->links() }}
        <div>
        </div>
    </div>
</div>

{{-- <style>
    li {
        display: inline;
    }
</style> --}}