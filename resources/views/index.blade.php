<h2>List Category</h2>
<a href="/category/create">Tambah Category</a>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($categories as $cat)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cat->name }}</td>
        <td>
            <a href="/category/{{ $cat->id }}">Detail</a>
            <a href="/category/{{ $cat->id }}/edit">Edit</a>
            <form action="/category/{{ $cat->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
