<h2>Edit Category</h2>

<form action="/category/{{ $category->id }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="name" value="{{ $category->name }}"><br><br>
    Deskripsi: <textarea name="description">{{ $category->description }}</textarea><br><br>
    <button type="submit">Update</button>
</form>
 