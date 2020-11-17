<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tambahdata')}}" method="POST">
@csrf
    <input type="text" name="judul" id="judul" placeholder="Masukan judul">
    <input type="text" name="konten" id="konten" placeholder="Masukan konten">
    <input type="text" name="sub_judul" id="sub_judul" placeholder="Masukan sub_judul">
    <input type="text" name="permalink" id="permalink" placeholder="Masukan permalink">
    <input type="text" name="category_id" id="category_id" placeholder="Masukan category_id">
    <input type="text" name="published" id="published" placeholder="Masukan published">
    <input type="submit">
</form>
</body>
</html>