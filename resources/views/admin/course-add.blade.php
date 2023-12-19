@extends('layouts.admin')
@section('title', 'Tambah Data Mata Kuliah')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Data Mata Kuliah
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="course" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="kode_matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Matkul</label>
                        <input type="text" name="kode_matkul" id="kode_matkul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="23****" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Matkul</label>
                        <input type="text" name="nama_matkul" id="nama_matkul" placeholder="Matematika Diskrit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                        <select name="semester" id="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled>Pilih Semester</option>
                            <option value="I (Satu)">I (Satu)</option>
                            <option value="II (Dua)">II (Dua)</option>
                            <option value="III (Tiga)">III (Tiga)</option>
                            <option value="IV (Empat)">IV (Empat)</option>
                            <option value="V (Lima)">V (Lima)</option>
                            <option value="VI (Enam)">VI (Enam)</option>
                            <option value="VII (Tujuh)">VII (Tujuh)</option>
                            <option value="VIII (Delapan)">VIII (Delapan)</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SKS</label>
                        <select name="sks" id="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled>Pilih SKS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/course">Kembali</a></button>
                    <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
