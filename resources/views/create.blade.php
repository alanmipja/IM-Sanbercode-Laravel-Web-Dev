<h2>Tambah Category</h2>

<form action="/category" method="POST">
    @csrf
    Nama: <input type="text" name="name"><br><br>
    Deskripsi: <textarea name="description"></textarea><br><br>
    <button type="submit">Simpan</button>
</form>
