<html>
<head>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">   
 Nama Anda : <input type="text" name="nama"><br>   
  <input type="submit" name="Input" value="Input">;
</FORM>   
</body>
</html>
<?php
if (isset ($_POST ['Input'])) {
    $nama = $_POST['nama'];
    echo "nama Anda : <b> $nama </b>";
}
?>