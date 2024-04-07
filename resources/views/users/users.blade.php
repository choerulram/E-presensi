<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-presensi | Choice User</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/pnc.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            height: 250px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                border-radius: 0; /* Remove border-radius on small screens */
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-5 pt-50">
        <div class="relative overflow-x-auto max-w-screen-md mx-auto shadow-md sm:rounded-lg container">
            <h1 class="text-3xl font-bold mb-5 pt-5">Login Sebagai</h1>
            <div class="flex justify-center items-center space-x-4 p-4 mx-auto">
                <a href="/login" class="no-underline">
                    <div class="p-4 bg-blue-500 border border-blue-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light flex flex-col items-center">
                        <i data-feather="user" class="w-32 h-32 text-white mb-3"></i>
                        <h3 class="font-semibold text-lg text-white">Admin</h3>
                    </div>
                </a>
                <a href="/lecturer" class="no-underline">
                    <div class="p-4 bg-green-500 border border-green-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light flex flex-col items-center">
                        <i data-feather="book-open" class="w-32 h-32 text-white mb-3"></i>
                        <h3 class="font-semibold text-lg text-white">Dosen</h3>
                    </div>
                </a>
                <a href="/class" class="no-underline">
                    <div class="p-4 bg-purple-500 border border-purple-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light flex flex-col items-center">
                        <i data-feather="users" class="w-32 h-32 text-white mb-3"></i>
                        <h3 class="font-semibold text-lg text-white">Mahasiswa</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
