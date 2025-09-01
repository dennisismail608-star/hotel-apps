<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kali data</title>
</head>

<body>
    <h1>Balok</h1>
    <form action="{{ route('store_balok') }}" method="post">
        @csrf
        <label for="">panjang</label>
        <input type="number" name="panjang">
        <label for="">lebar</label>
        <input type="number" name="lebar">
        <label for="">tinggi</label>
        <input type="number" name="tinggi">
        <br> <br>
        <button type="submit">Prosses</button>
        <a href="/Tugas">kembali</a>
    </form>
    <h3>volume : {{ $jumlah ?? 0 }}</h3>
    <h3>luas permukaan : {{ $jumlah2 ?? 0 }}</h3>
</body>

</html>
