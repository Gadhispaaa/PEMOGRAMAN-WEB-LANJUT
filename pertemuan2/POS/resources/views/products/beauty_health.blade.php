<!-- beauty_health.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Kecantikan dan Kesehatan</title>
</head>
<body>
    <h1>Daftar Produk Kecantikan dan Kesehatan</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>