<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
</head>
<body>
    <h1>Form Output</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>NIM
            <td>:</td>
            <td>{{ $id }}</td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>:</td>
            <td>{{ $address }}</td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $grade }}</td>
        </tr>
    </table>
</body>
</html>