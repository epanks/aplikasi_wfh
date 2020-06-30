<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    {{-- @if($updateMode)
    @include('livewire.paket.paket-update')
    @else
    @include('livewire.paket.paket-create')
    @endif --}}
    <div class="relative text-gray-600">
        <input type="search" name="serch" placeholder="Search" class="bg-gray-300 h-10 px-5 pr-2 rounded-full text-sm focus:outline-none" wire:model="search">
        {{-- <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
          </svg>
        </button> --}}
      </div>

    <div class="py-0">
        <h1 class="capitalize text-lg text-cool-gray-700 mb-5 font-bold text-center">DAFTAR PAKET WILAYAH 3
        </h1>
        <div class="flex justify-end pb-2">
            <a type="button" href="{{ route('paket-create') }}"
                class="flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Tambah Paket
            </a>
        </div>

        <table class="shadow-lg bg-white">
            <thead>
                <tr>
                    <th class="bg-indigo-300 border px-4 py-2">No</th>
                    <th class="bg-indigo-300 border px-4 py-2">Nama Paket</th>
                    <th class="bg-indigo-300 border px-4 py-2">Pagu</th>
                    <th class="bg-indigo-300 border px-4 py-2">Keuangan</th>
                    <th class="bg-indigo-300 border px-4 py-2">Progres Keuangan</th>
                    <th class="bg-indigo-300 border px-4 py-2">Progres Fisik</th>
                    <th class="bg-indigo-300 border px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datapaket as $no => $row)
                <tr>
                    <td class="border px-4 py-2">
                        {{ ($datapaket->currentPage()-1) * $datapaket->perPage() + $loop->index + 1 }}</td>
                    <td class="border px-4 py-2">{{$row->nmpaket}}</td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->pagurmp)}}</td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->progres->keuangan == 0 ? 0 : number_format($row->progres->keuangan)}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->pagurmp == 0 ? 0 : number_format((($row->progres->keuangan)/($row->pagurmp)*100),2)}}
                    </td>
                    <td class="border px-4 py-2 text-right">{{number_format(($row->progres->fisik),2)}}</td>
                    <td class="border px-4 py-2"><a type="button" href="{{ route('paket-update', $row->id)}}" class="flex justify-center h-6 px-4 py-0 text-sm font-medium text-white bg-indigo-600 border
                    border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700
                    focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Edit
                        </a>
                        <button type="submit"
                            class="flex justify-center h-6 px-2 py-0 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Delete
                        </button></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <td></td>
                <td class="border px-4 py-2 text-right">Jumlah</td>
                <td class="border px-4 py-2 text-right">{{number_format($datapaket->sum('pagurmp'))}}
                </td>
                <td class="border px-4 py-2 text-right">{{number_format($datapaket->sum('keuangan'))}}
                </td>
                <td class="border px-4 py-2 text-right">
                    {{number_format((($datapaket->sum('keuangan'))/($datapaket->sum('pagurmp'))*100),2)}}
                </td>
                <td class="border px-4 py-2 text-right">
                    {{number_format(($datapaket->avg('fisik')),2)}}
                </td>
            </tfoot>
        </table>
        {{ $datapaket->links() }}
        <div>
        </div>
    </div>
</div>

{{-- <style>
    li {
        display: inline;
    }
</style> --}}