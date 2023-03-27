<h3>Registrasi</h3>
<form action="/regis" method="post">
    @csrf
    <input type="text" name="nama_petugas" id="nama_petugas" placeholder="Nama">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="text" name="nik" id="nik" placeholder="NIK">
    <input type="text" name="telp" id="telp" placeholder="Telepon">
    <input type="password" name="password" id="password" placeholder="Password">
    <button type="submit">Register</button>



</form>