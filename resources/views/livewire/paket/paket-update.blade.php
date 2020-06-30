<div class="container">
    <div class="flex">
        <div class="flex md:flex-row-reverse flex-wrap">
            <div class="bg-white rounded border border-cool-gray-200 p-5">
                <h1 class="capitalize text-lg text-cool-gray-700 mb-5">Update Paket</h1>
                <div class="">

                </div>

                <form wire:submit.prevent="paket-update">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                            <input type="hidden" wire:model="paketId">
                            <div class="mb-5">
                                <label for="nmpaket" class="block font-medium mb-1">Nama Paket</label>
                                <textarea type="text" rows="4" wire:model.lazy="nmpaket" placeholder="Nama Paket" id="nmpaket"
                                    class="w-full form-input "></textarea>
                                @error('nmpaket')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="pagurmp" class="block font-medium mb-1">Pagu</label>
                                <input type="number" placeholder="Pagu" id="pagurmp" class="w-full form-input"
                                    wire:model="pagurmp">
                                @error('pagurmp')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="balai_id" class="block font-medium mb-1">Balai</label>
                                <select class="w-full form-input" wire:model="balai_id">
                                    <option value="">Select Balai</option>
                                    </option>
                                    @foreach ($dtbalai as $item)
                                    <option value="{{$item->id}}">{{$item->nmbalai}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="kdsatker" class="block font-medium mb-1">Kode Satker</label>
                                <select class="w-full form-input" wire:model="kdsatker">
                                    <option value="">Select Satker</option>
                                    </option>
                                    @foreach ($this->datasatker as $item)
                                    <option value="{{$item->kdsatker}}">{{$item->nmsatker}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-3">
                            <div class="mb-5">
                                <label for="ta" class="block font-medium mb-1">Tahun Anggaran</label>
                                <select class="w-full form-input" wire:model="ta">
                                    <option value="">Select Tahun Anggaran</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    </option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="trgoutput" class="block font-medium mb-1">Output</label>
                                <input type="number" placeholder="Output" id="trgoutput" class="w-full form-input"
                                    wire:model="trgoutput">
                                @error('trgoutput')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="satoutput_id" class="block font-medium mb-1">Satuan Output</label>
                                <select class="w-full form-input" wire:model="satoutput_id">
                                    <option value="">Select Satuan Output</option>
                                    </option>
                                    @foreach ($dtsatoutput as $item)
                                    <option value="{{$item->id}}">{{$item->nmsatoutput}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="trgoutcome" class="block font-medium mb-1">Outcome</label>
                                <input type="number" placeholder="Outcome" id="trgoutcome" class="w-full form-input"
                                    wire:model="trgoutcome">
                                @error('trgoutcome')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="satoutcome_id" class="block font-medium mb-1">Satuan Outcome</label>
                                <select class="w-full form-input" wire:model="satoutcome_id">
                                    <option value="">Select Satuan Outcome</option>
                                    </option>
                                    @foreach ($dtsatoutcome as $item)
                                    <option value="{{$item->id}}">{{$item->nmoutcome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-3">
                            <div class="mb-5">
                                <label for="ppk_id" class="block font-medium mb-1">Nama PPK</label>
                                <select class="w-full form-input" wire:model="ppk_id">
                                    <option value="">Select Nama PPK</option>
                                    </option>
                                    @foreach ($filterppk as $item)
                                    <option value="{{$item->id}}">{{$item->nmppk}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="kdoutput" class="block font-medium mb-1">Kode Output</label>
                                <select class="w-full form-input" wire:model="kdoutput">
                                    <option value="">Select Output</option>
                                    </option>
                                    @foreach ($dtkdoutput as $item)
                                    <option value="{{$item->id}}">{{$item->nmoutput}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="ks_id" class="block font-medium mb-1">Kontrak/Swakelola</label>
                                <select class="w-full form-input" wire:model="ks_id">
                                    <option value="">Select K/S</option>
                                    </option>
                                    @foreach ($dtks as $item)
                                    <option value="{{$item->id}}">{{$item->nmks}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="sycmyc_id" class="block font-medium mb-1">SYC/MYC</label>
                                <select class="w-full form-input" wire:model="sycmyc_id">
                                    <option value="">Select SYC/MYC</option>
                                    </option>
                                    @foreach ($dtsycmyc as $item)
                                    <option value="{{$item->id}}">{{$item->nmsycmyc}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="py-4">
                <button type="submit"
                    class="flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Update
                </button>
                {{-- <button wire:click.prevent="cancel()"
                    class="flex justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-indigo-700 transition duration-150 ease-in-out">
                    Update
                </button> --}}
            </div>
            </form>
        </div>
    </div>
</div>