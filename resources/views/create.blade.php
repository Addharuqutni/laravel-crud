<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Membuat CRUD Pada Laravel</title>
  <style type="text/css">
    body {
      margin-left: 70px;
    }

    input {
      padding-left: 20px;
      border: 1px solid #000;
      border-radius: 5px;
      width: 250px;
      height: 30px;
    }

  </style>
</head>
<body>

  <h1>Tambah Buku</h1>

  <a href="/books"><button>kembali</button></a>
  
  <br/>
  <br/>

  <form action="/books/create" method="post">
    {{ csrf_field() }}
    <span>Judul Buku</span><br><br>
    <input type="text" name="judul" required="required"> <br/>
    <br>
    <span>Penerbit</span><br><br>
    <input type="text" name="penerbit" required="required"> <br/>
    <br>
    <span>Tahun Terbit</span><br><br>
    <input type="text" name="tahun_terbit" required="required"> <br/>
    <br>
    <span>Pengarang</span> <br><br>
    <input type="text" name="pengarang" required="required"> <br/>
    <input type="submit" value="Simpan Data" style="margin-top: 30px;width: 10%;">
  </form>

</body>
</html>