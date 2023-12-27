<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }
        nav {
            left: 0;
            top: 0;
            right: 0;
            width: 100%;
            background-color: #000080;
            color: #fff;
            text-align: right;
        }
        nav a {
            color: #fff;
            text-decoration: none;
        }
        nav ul {
            padding: 5px;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 50px;
            width: 100%;
            padding-top: 10px;
            background-color: #000080;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="/data-mhs">Data Mahasiswa</a></li>
            <li><a href="tambah-data">Tambah Data Mahasiswa</a></li>
        </ul>
    </nav>

    @yield('container')
    <footer>&copy; 2023 Ini Footer</footer>
</body>
</html>