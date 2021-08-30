<h1>SUPER ADMIN</h1>
<form action="{{ route('buatAkun') }}" method="post" enctype="multipart/form-data">
@csrf
<input type="text" placeholder="Nama" name="name">
<input type="text" placeholder="Email" name="email">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Buat Akun Admin">
</form>