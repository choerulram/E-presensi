@extends('layouts.admin')
@section('title', 'Course')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Data Mata Kuliah
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/course/{{$course->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="kode_matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Matkul</label>
                        <input type="text" name="kode_matkul" id="kode_matkul" value="{{$course->kode_matkul}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="220******" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Matkul</label>
                        <input type="text" name="nama_matkul" id="nama_matkul" value="{{$course->nama_matkul}}" placeholder="Achmad Choerul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="class_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                        <select name="class_id" id="class_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="{{$course->id}}">{{$course->semester}}</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="class_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SKS</label>
                        <select name="class_id" id="class_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="{{$course->id}}">{{$course->sks}}</option>
                        </select>
                    </div>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/course">Kembali</a></button>
                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
