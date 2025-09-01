<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kali data</title>
</head>

<body>
    <h1>Tabung</h1>
    <form action="{{ route('store_tabung') }}" method="post">
        @csrf
        <label for="">Ruas</label>
        <input type="number" name="ruas">
         <label for="">Tinggi</label>
        <input type="number" name="tinggi">
        <br> <br>
        <button type="submit">Prosses</button>
        <a href="/Tugas">kembali</a>
    </form>
    <h3>volume : {{ $jumlah ?? 0 }}</h3>
    <h3>luas permukaan : {{ $jumlah2 ?? 0 }}</h3>
</body>

</html>
