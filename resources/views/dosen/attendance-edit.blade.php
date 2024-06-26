@extends('layouts.dosen')
@section('title', 'Attendance')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            {{-- {{ $attendance }} --}}
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Data Absensi
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/student/{{$attendance->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="text" name="nim" id="nim" value="{{$attendance->nim}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="220******" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$attendance->nama}}" placeholder="Achmad Choerul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    {{-- <div class="mb-4">
                        <label for="status_absensi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Absensi</label>
                        <input type="" name="status_absensi" id="status_absensi" value="{{$attendance->status_absensi}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.HP</label>
                        <input type="text" name="no_hp" id="no_hp" value="{{$attendance->no_hp}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="0812********" required>
                    </div> --}}
                    <div class="mb-4">
                        <label for="status_absensi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Absensi</label>
                        <select name="status_absensi" id="status_absensi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled>Pilih Status</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Bolos">Bolos</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Ijin">Ijin</option>
                            <option value="Telat">Telat</option>
                        </select>
                    </div>
                    <div class="mb-4 max-w-full mx-auto">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                        <textarea name="catatan" id="catatan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan alamat tempat tinggal Anda..." required>{{$attendance->alamat}}</textarea>
                    </div>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/attendance">Kembali</a></button>
                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
