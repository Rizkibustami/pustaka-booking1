<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <center>
    <table>
    <tr>
      <th colspan ='3'>
<h2>Pemesanan Tiket Cinema 99</h2>
</th>
            </tr>
            <tr>
                <td colspan="3">
                    </td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>
                    <?= $nmpemesan; ?>
                </td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td>
                    <?= $jdlfilm; ?>
                </td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>
                    <?= $jam; ?>
                </td>
            </tr>
            <tr>
                <td>Tipe Studio</td>
                <td>:</td>
                <td>
                    <?= $tipe; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pesan</td>
                <td>:</td>
                <td>
                    <?= $jmlpesan; ?>
                </td>
            </tr>
            <?php
                    if ($tipe=="Reguler2D")
                    {
                        $tarifsewa = 40000;
                    }
                    elseif ($tipe=="3D")
                    {
                        $tarifsewa=80000;
                    }
                    else
                    {
                        $tarifsewa=100000;
                    }
                    $total= $tarifsewa*$jmlpesan;?></tr>
                    <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>
                    <?= $tarifsewa; ?>
                </td>
                </tr>
            <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td>
                        <?= $total; ?>
                    </td>
                </tr>
               <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Cinema'); ?>">Input Data Lagi</a>
                
                </td>
            </tr>
        </table>
    </center>
  </body>
</html>