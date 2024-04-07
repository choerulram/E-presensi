@extends('layouts.admin')
@section('title', 'Notifikasi Admin')

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
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Data Baru Ditambahkan!</span>
                    <div class="mb-2 text-sm font-normal">Anda telah menambahkan data baru ke dalam sistem. Silakan periksa keakuratan informasi dan pastikan bahwa data tersebut sesuai dengan ketentuan yang berlaku.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Lihat</a>
                </div>
            </div>
        </div>
        <div id="toast-message-cta" class="w-full max-w-md p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 mb-5 mt-5 ml-3 me-3" role="alert" style="box-shadow: 1px 2px 3px;">
            <div class="flex">
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Perubahan Data Dilakukan!</span>
                    <div class="mb-2 text-sm font-normal">Anda telah melakukan perubahan pada data di dalam sistem. Pastikan untuk memeriksa detail perubahan dan memastikan bahwa informasi yang diperbarui sesuai dengan kebutuhan.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Lihat</a>
                </div>
            </div>
        </div>
        <div id="toast-message-cta" class="w-full max-w-md p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 mb-5 mt-5 ml-3 me-3" role="alert" style="box-shadow: 1px 2px 3px;">
            <div class="flex">
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Data Dihapus dari Sistem!</span>
                    <div class="mb-2 text-sm font-normal">Anda telah menghapus data dari sistem. Pastikan untuk memvalidasi bahwa penghapusan ini sesuai dengan kebijakan dan bahwa tidak ada data yang dihapus secara tidak sengaja.</div>
                    <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
