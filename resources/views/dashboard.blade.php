<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    <div class="pb-52">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-1 gap-6">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg lg:col-span-2">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-8">
                            Identitas Pengunjung
                        </h2>

                        <div>
                            <form class="w-full" method="POST" enctype="multipart/form-data">
                                <div>
                                    @csrf

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama
                                                Pengunjung <span class="text-red-500">*</span></label>
                                            <input value="{{ old('name') }}" name="name"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                type="number" placeholder="Nama Pengunjung">
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat
                                                <span class="text-red-500">*</span></label>
                                            <input value="{{ old('address') }}" name="address"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                type="number" placeholder="Alamat">
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tujuan
                                                <span class="text-red-500">*</span></label>
                                            <input value="{{ old('purpose') }}" name="purpose"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                type="number" placeholder="Tujuan">
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No
                                                HP
                                                <span class="text-red-500">*</span></label>
                                            <input value="{{ old('phone') }}" name="phone"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                type="number" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <button type="submit"
                                            class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-8">
                            Statistik Pengunjung
                        </h2>

                        <div>
                            <form class="w-full" method="POST" enctype="multipart/form-data">
                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> --}}
                                <div>
                                    @csrf
                                    <h2 class="font-semibold text-lg text-gray-800 leading-tight pb-2">
                                        Asal Pengirim :
                                    </h2>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Provinisi</label>
                                            <select name="origin_province"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option disabled selected>--- Pilih Provinsi ---</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Kota/Kabupaten
                                                <span class="text-red-500">*</span></label>
                                            <select name="origin_city"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option disabled selected>--- Pilih Kota/kabupaten ---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div>
                                    <h2 class="font-semibold text-lg text-gray-800 leading-tight pb-2">
                                        Tujuan Pengiriman :
                                    </h2>

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Kota/Kabupaten
                                                <span class="text-red-500">*</span></label>
                                            <select name="destination_city" id="destination_city"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option disabled selected>--- Pilih Kota/kabupaten ---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- </div> --}}

                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <button type="submit"
                                            class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
