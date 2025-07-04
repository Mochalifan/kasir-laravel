<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Data Produk</h2>
    <form method="POST" action="/insert" class="row g-2 mb-3">
        @csrf
        <div class="col"><input name="kode" class="form-control" placeholder="Kode"></div>
        <div class="col"><input name="nama" class="form-control" placeholder="Nama"></div>
        <div class="col"><input name="harga" type="number" class="form-control" placeholder="Harga"></div>
        <div class="col"><input name="stock" type="number" class="form-control" placeholder="Stock"></div>
        <div class="col"><button type="submit" class="btn btn-primary">Insert</button></div>
    </form>

    <table class="table table-bordered">
        <thead><tr><th>Kode</th><th>Nama</th><th>Harga</th><th>Stock</th><th>Aksi</th></tr></thead>
        <tbody>
        @foreach($products as $p)
            <tr>
                <form method="POST" action="/update/{{ $p->id }}">
                    @csrf
                    <td><input name="kode" value="{{ $p->kode }}" class="form-control"></td>
                    <td><input name="nama" value="{{ $p->nama }}" class="form-control"></td>
                    <td><input name="harga" value="{{ $p->harga }}" class="form-control"></td>
                    <td><input name="stock" value="{{ $p->stock }}" class="form-control"></td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <a href="/delete/{{ $p->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Delete</a>
                    </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
