<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-presensi | Login Admin</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/pnc.png') }}">

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: none;
            padding: none;
            box-sizing: border-box;
        }
        body {
            background-color: hsl(0, 4%, 95%);
        }
        h1 {
            text-align: center;
            margin-top: 0;
        }
        .container {
            width: 35%;
            border-radius: 10px;
            margin: auto;
            margin-top: 90px;
            margin-bottom: 40px ;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary a {
            color: white;
            text-decoration: none;
            width: 100px;
        }
        img {
            padding-left: 5px;
        }
    </style>
</head>
<body>

    <!-- form login -->
    <div class="container border p-5 bg-light rounded">
        <div class="text-center mb-4">
            <img src="{{ asset('images/pnc.png') }}" class="img-fluid w-25" alt="Sample image">
        </div>
        <h1 class="text-center mb-4">Login</h1>

        @if (Session::has('status'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif

        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="example@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="example123" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fas fa-eye"></i></button>
                </div>

                <!-- lihat password -->
                <script>
                    const togglePassword = document.querySelector('#togglePassword');
                    const password = document.querySelector('#exampleInputPassword1');

                    togglePassword.addEventListener('click', function () {
                        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                        password.setAttribute('type', type);
                        this.textContent = type === 'password' ? 'Lihat' : 'Sembunyikan';
                    });
                </script>

            </div>
            <div class="text">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <!-- end form login -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
