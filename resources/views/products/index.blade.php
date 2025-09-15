<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
