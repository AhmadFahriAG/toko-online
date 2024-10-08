<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Register</title>
    <style>
        body {
            background: url('assets/gambar.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Helvetica Neue', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h3 {
            text-align: center;
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 2rem;
            letter-spacing: 2px;
        }

        form {
            background-color: #fff; /* Solid putih tanpa transparansi */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative;
        }

        form:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
            border-radius: 0;
            background-color: #fff; /* Background solid putih */
            color: #333;
            box-shadow: none;
            height: 45px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #0056b3;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .text-muted {
            font-size: 0.9rem;
            text-align: center;
            color: #666;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        input::placeholder {
            color: #999;
        }

        form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #007bff;
            border-radius: 50px;
            margin-top: -20px;
        }

    </style>
</head>
<body>
    <form action="proses_register.php" method="post">
        <h3>Register Petugas</h3>
        <input type="text" name="username" placeholder="Username" class="form-control">
        <input type="password" name="password" placeholder="Password" class="form-control" required>
        <input type="text" name="nama_petugas" placeholder="Nama" class="form-control">

        <select id="level" name= "level" class="form-control"required>
            <option value="" disabled selected>Pilih Level</option>
            <option value="admin">Admin</option>
            <option value="petugas">petugas</option>
        </select>
        <input type="submit" name="simpan" value="Submit" class="btn btn-primary">
        <p class="text-muted">Sudah punya akun? <a href="login.php">Login</a></p>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
