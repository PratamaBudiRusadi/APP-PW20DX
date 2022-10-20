<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css"); ?>">
</head>
<body>
    <!-- bagian menu/tombol -->
    <nav>

    </nav>
    <!-- bagian tabel -->
    <table>
        <!-- judul tabel -->
        <thead>
            <tr>
                <th style="width: 5%;"> No.</th>
                <th style="width: 10%;">NPM</th>
                <th style="width: 30%;">Nama</th>
                <th style="width: 15%;">Telepon</th>
                <th style="width: 15%;">Jurusan</th>
                <th style="width: 15%;">Foto</th>
                <th style="width: 10%;">Status</th>
            </tr>
        </thead>
        <!-- list tabel -->
        <tbody>
            <!-- awal lopping -->
            <?php
            //nilai awal "no"
            $no = 1;
                foreach($hasil as $record)
                {
                    //jika status = 1
                    if($record->status == "1")
                    {
                        $status = "Aktif";
                    }
                    //jika status = 0
                    else
                    {
                        $status = "Pasif";
                    }
            ?>
            <tr <?php if($record->status == "1") { ?>class="bg_putih" <?php }
            else {?> class="bg_ungu" <?php }?>>
                <td style="text-align: center; "><?php echo $no; ?></td>
                <td style="text-align: center; "><?php echo $record->npm; ?></td>
                <td style="text-align: justify; "><?php echo $record->nama; ?></td>
                <td style="text-align: center; "><?php echo $record->telepon; ?></td>
                <td style="text-align: center; "><?php echo $record->jurusan; ?></td>
                <td style="text-align: center; "><?php echo $record->foto; ?></td>
                <td style="text-align: center; "><?php echo $status; ?></td>
            </tr>
            <!-- akhir lopping -->
            <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>