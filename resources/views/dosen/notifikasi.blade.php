@extends('layouts.dosen')
@section('title', 'Absensi')

@section('content')
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
        <div class="notifikasi flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Halaman Notifikasi
            </h3>
        </div>
        <div id="toast-message-cta" class="w-full max-w-md p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 mb-5 mt-5 ml-3 me-3" role="alert" style="box-shadow: 1px 2px 3px;">
            <div class="flex">
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Absensi Selesai!</span>
                    <div class="mb-2 text-sm font-normal">Proses absensi untuk mata kuliah [Nama Mata Kuliah] pada [Tanggal Pertemuan] telah berhasil diselesaikan. Berikut adalah ringkasan hasil absensi.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Detail</a>
                </div>
            </div>
        </div>
        <div id="toast-message-cta" class="w-full max-w-md p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 mb-5 mt-5 ml-3 me-3" role="alert" style="box-shadow: 1px 2px 3px;">
            <div class="flex">
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Update Kehadiran Mahasiswa!</span>
                    <div class="mb-2 text-sm font-normal">Halo [Nama Dosen], pemberitahuan bahwa ada perubahan pada kehadiran mahasiswa dalam mata kuliah [Nama Mata Kuliah]. Silakan periksa detail perubahan dan pastikan informasi kehadiran sesuai.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Detail</a>
                </div>
            </div>
        </div>
        <div id="toast-message-cta" class="w-full max-w-md p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 mb-5 mt-5 ml-3 me-3" role="alert" style="box-shadow: 1px 2px 3px;">
            <div class="flex">
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Pemberitahuan Penting!</span>
                    <div class="mb-2 text-sm font-normal">Halo [Nama Dosen], terdapat informasi penting terkait kehadiran dan absensi mahasiswa. Silakan periksa halaman notifikasi untuk mendapatkan detail lebih lanjut.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
