<html>
<head>
    <title>Raport</title>
</head>
<body>
<center>
<form action="data.php" method="post">
    <table>
    <tr>
        <td> Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"><br></td>
    </tr> 
     <tr> 
        <td> NIS</td>
        <td>:</td> 
        <td><input type="number" name="nis" id=""></td>   
     </tr>
     <tr> 
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" cols="40" rows="10"></textarea></td>
     </tr>
     <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="JK">Laki Laki 
            <input type="radio" name="JK"> Perempuan </td>
     </tr>
     <tr> 
        <td>Agama</td>
        <td>:</td>
        <td><select name="kartun">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Budha">Budha</option>
    </td>
     </tr>
     <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td><input type="text" name="asal sekolah"></td>
     </tr>
     <tr>
        <td>Nama Orang Tua / Wali</td>
        <td>:</td>
        <td><input type="text" name="nama ortu"></td>
     </tr>
     <tr>
        <td>Mata Pelajaran yang di sukai</td>
        <td>:</td>
        <td> <input type="checkbox" name="mtk" value="Matematika"> Matematika
             <input type="checkbox" name="indo" value="Bahasa.Indonesia"> Bahasa.Indonesia<br>
             <input type="checkbox" name="al-qur'an" value="Al-Qur'an"> Al-Qur'an
             <input type="checkbox" name="kwu" value="Kewirausahaan"> Kewirausahaan<br>
             <input type="checkbox" name="inggris" value="Bahasa.Inggris"> Bahasa.Inggris<br>
        </td>
     </tr>
     <tr>
        <td>Total Nilai Ijazah SD</td>
        <td>:</td>
        <td><input type="number" name="nilai"></td>
     </tr>
     <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email"></td>
     </tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td><input type="submit" name="input" value="kirim"> </td>
     </table>
    </form>
    </center>
</body>
</html>