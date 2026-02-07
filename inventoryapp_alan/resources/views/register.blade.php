<h1>Form Register</h1>

<form action="/welcome" method="POST">
    @csrf

    <label>Nama Depan:</label><br>
    <input type="text" name="nama_depan"><br><br>

    <label>Nama Belakang:</label><br>
    <input type="text" name="nama_belakang"><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
    <input type="radio" name="gender" value="Perempuan"> Perempuan
    <br><br>

    <label>Negara:</label><br>
    <select name="negara">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Singapura">Singapura</option>
    </select>
    <br><br>

    <label>Bahasa yang dikuasai:</label><br>
    <input type="checkbox" name="bahasa[]" value="Indonesia"> Indonesia
    <input type="checkbox" name="bahasa[]" value="Inggris"> Inggris
    <input type="checkbox" name="bahasa[]" value="Arab"> Arab
    <br><br>

    <label>Bio:</label><br>
<textarea name="bio" rows="4" cols="40"></textarea>
<br><br>


    <button type="submit">Submit</button>
</form>
