<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <h1>Input Test</h1>
    <form action="/output" method="post">
        @csrf
        <label for="name">Nama :</label>
        <input type="text" name="name" id="name" placeholder="Nama"><br><br>
        <label for="id">NIM :</label>
        <input type="text" name="id" id="id" placeholder="NIM"><br><br>
        <label for="address">Asal :</label>
        <input type="text" name="address" id="address" placeholder="Asal"><br><br>
        <label for="grade">Prodi :</label>
        <input type="text" name="grade" id="grade" placeholder="Prodi"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>