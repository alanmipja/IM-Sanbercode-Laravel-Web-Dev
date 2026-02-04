<h1>Halaman Register</h1>

<form action="/welcome" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="Nama Depan"><br><br>
    <input type="text" name="last_name" placeholder="Nama Belakang"><br><br>
    <button type="submit">Submit</button>
</form>
