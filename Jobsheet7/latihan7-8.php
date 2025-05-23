<?php
// inisiasi variable yang digunakan
//nama peralatan
$alat_perangkat_cpu1 = "Mainboard";
$alat_perangkat_cpu2 = "Processor";
$alat_perangkat_cpu3 = "Random Access Memory";
$alat_perangkat_cpu4 = "Hardisk";

//harga per unit peralatan
$harga_alat_perangkat_cpu1 = 750000;
$harga_alat_perangkat_cpu2 = 625000;
$harga_alat_perangkat_cpu3 = 160000;
$harga_alat_perangkat_cpu4 = 430000;

// jumlah peralatan yang ada
$jumlah_alat_perangkat_cpu1 = 2;
$jumlah_alat_perangkat_cpu2 = 5;
$jumlah_alat_perangkat_cpu3 = 1;
$jumlah_alat_perangkat_cpu4 = 3;

// total harga per jenis peralatan
$total_alat_perangkat_cpu1 = $jumlah_alat_perangkat_cpu1 * $harga_alat_perangkat_cpu1;
$total_alat_perangkat_cpu2 = $jumlah_alat_perangkat_cpu2 * $harga_alat_perangkat_cpu2;
$total_alat_perangkat_cpu3 = $jumlah_alat_perangkat_cpu3 * $harga_alat_perangkat_cpu3;
$total_alat_perangkat_cpu4 = $jumlah_alat_perangkat_cpu4 * $harga_alat_perangkat_cpu4;

// hitung grand total niali peralatan perangkat_cpu
$total_harga = $total_alat_perangkat_cpu1 + $total_alat_perangkat_cpu2 + $total_alat_perangkat_cpu3 + $total_alat_perangkat_cpu4;

// besar diskon untuk perangkat_cpu
$diskon = 5;

// jumlah total diskon yang diberikan kepada perangkat_cpu
$nilai_diskon = ($diskon * $total_harga) / 100;

// jumlah yang harus dibayar perangkat_cpu
$total_harga_dibayar = $total_harga - $nilai_diskon;
?>

<html>
<head>
    <title>Perangkat CPU dan Daftar Peralatan yang Dibeli</title>
</head>

<body>
    <center>
        <table border="1" cellspacing="0" cellpadding="3">

            <tr>
                <td colspan="4" align="center" valign="middle">
                    <b> Daftar Pemesanan Peralatan Perangkat CPU </b>
                </td>
            </tr>
            <tr>
                <td><b>Nama Peralatan</b></td>
                <td><b>Jumlah</b></td>
                <td><b>Harga Satuan</b></td>
                <td><b>Jumlah Harga</b></td>
            </tr>
            <tr>
                <td align="left">
                    <?php echo $alat_perangkat_cpu1; ?>
                </td>
                <td align="right">
                    <?php echo $jumlah_alat_perangkat_cpu1; ?>
                </td>
                <td align="right">
                    <?php echo $harga_alat_perangkat_cpu1; ?>
                </td>
                <td align="right">
                    <?php echo $total_alat_perangkat_cpu1;?>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <?php echo $alat_perangkat_cpu2; ?>
                </td>
                <td align="right">
                    <?php echo $jumlah_alat_perangkat_cpu2; ?>
                </td>
                <td align="right">
                    <?php echo $harga_alat_perangkat_cpu2; ?>
                </td>
                <td align="right">
                    <?php echo $total_alat_perangkat_cpu2; ?>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <?php echo $alat_perangkat_cpu3; ?>
                </td>
                <td align="right">
                    <?php echo $jumlah_alat_perangkat_cpu3; ?>
                </td>
                <td align="right">
                    <?php echo $harga_alat_perangkat_cpu3; ?>
                </td>
                <td align="right">
                    <?php echo $total_alat_perangkat_cpu3;?>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <?php echo $alat_perangkat_cpu4; ?>
                </td>
                <td align="right">
                    <?php echo $jumlah_alat_perangkat_cpu4; ?>
                </td>
                <td align="right">
                    <?php echo $harga_alat_perangkat_cpu4; ?>
                </td>
                <td align="right">
                    <?php echo $total_alat_perangkat_cpu4;?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">Total Harga</td>
                <td align="right"><?php echo $total_harga; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Diskon
                    <?php echo "($diskon %)"; ?>
                </td>
                <td align="right"><?php echo $nilai_diskon; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Jumlah harus dibayar</td>
                <td align="right"><?php echo $total_harga_dibayar; ?></td>

            </tr>

        </table>
    </center>
</body>

</html>
