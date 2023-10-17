<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <center>
        <form action="<?= base_url('Cinema/cetak'); ?>" method="post">
        <table>
                
                <th colspan='3'>
                        <h2>Pemesanan Tiket Cinema 99</h2> </p>
                </th>

<tr>
<td>Nama Pemesan</td>
<td>:</td>
<td>   
        <input type="text" name="nmpemesan" id="nmpemesan"></td>
</tr>
<tr>
        <td>Judul Film</td>    
        <td>:</td>
        <td>
                <select name='jdlfilm' id='jdlfilm'>

             <option value="Parasite">Parasite</option>
             <option value="Hereditary">Hereditary</option>
             <option value="The Closet">The Closet</option>
             <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
             </select>
        </td>
</tr>
<br>
<tr>
<td>Pukul</td>
<td>:</td>
<td>
   <input type='radio' name='jam' value='14.20'>14.20
        <input type='radio' name='jam' value='15.40'>15.40
        <input type='radio' name='jam' value='16.40'>16.40</td><br>
</tr>
<tr>
<td>Tipe Studio</td>
<td>:</td>
<td>
        <input type='radio' name='tipe' value='Reguler2D'>Reguler2D
        <input type='radio' name='tipe' value='3D'>3D
        <input type='radio' name='tipe' value='Velvet'>Velvet</td><br></tr>
<tr>
<td>Jumlah Pesan</td>
<td>:</td>
<td>
        <input type="text" name="jmlpesan" id="jmlpesan">
</td>
</tr>

 <tr>
<td colspan='3' align='center'></p>
        <input type=submit name=submit value=Hitung>
        <input type=reset name=reset value=Batal></td></tr>
</table>
 </form>
</center>
</body>
</html>