<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – E-Tugas Tamansiswa</title>

    <!-- Favicons -->
    <link href="/img/gg.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/img/kl.jpg') center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            font-family: Arial, sans-serif; /* Change font family */
            color: #fff; /* Change text color */
        }

        .container {
            margin-top: 100px; /* Adjust top margin for centering */
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Box shadow */
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            color: #fff;
        }

        .form-container input[type="email"],
        .form-container input[type="password"] {
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent input background */
            border: none;
            border-radius: 5px; /* Rounded input */
            padding: 10px;
            margin-bottom: 20px;
            color: #fff;
        }

        .form-container input[type="email"]:focus,
        .form-container input[type="password"]:focus {
            background-color: rgba(255, 247, 247, 0.4); /* Semi-transparent background on focus */
        }

        .form-container button[type="submit"] {
            background-color: #007bff; /* Button background color */
            border: none;
            border-radius: 5px; /* Rounded button */
            padding: 10px;
            color: #fff;
            cursor: pointer;
        }

        .form-container button[type="submit"]:hover {
            background-color: #0056b3; /* Darker background color on hover */
        }

        .form-container p {
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4 form-container">
            <h2><b>E-Tugas</b><br>Tamansiswa</h2>
            <hr>

            @if(session('error'))
            <div class="alert alert-danger"> <b>Opps!</b> {{session('error')}} </div>
            @endif

            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p>Belum punya akun? <a href="/register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>

</html>
