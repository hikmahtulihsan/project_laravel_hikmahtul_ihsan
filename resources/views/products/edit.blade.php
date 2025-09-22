<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Nama: <input type="text" name="name" value="{{ $product->name }}"></p>
        <p>Harga: <input type="number" name="price" value="{{ $product->price }}"></p>
        <p>Deskripsi: <textarea name="description">{{ $product->description }}</textarea></p>
        <button type="submit">Update</button>
    </form>
</body>
</html>
