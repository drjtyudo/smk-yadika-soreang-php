<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
</head>
<body>
<table id="datatablesSimple" class="table">
    <thead>
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nama Orang Tua</th>
            <th>Asal Sekolah</th>
            <th>Nomer Hp</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sumber</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($siswa as $a):?>
            <tr>
                <td>
                <?= $a['nisn']; ?>
            </td>
            <td>
                <?= $a['Nama']; ?>
            </td>
            <td>
                <?= $a['alamat']; ?>
            </td>
            <td>
                <?= $a['nama_ortu']; ?>
            </td>
            <td>
                <?= $a['asek']; ?>
            </td>
            <td>
                <?= $a['no_hp']; ?>
            </td>
            <td>
                <?= $a['jenis_kelamin']; ?>
            </td>
            <td>
                <?= $a['agama']; ?>
            </td>
            <td>
                <?= $a['sumber']; ?>
            </td>
            <td>
                <?= $a['jurusan']; ?>
            </td>
            <td>
                <a href="<?php anchor('')?>"><button class="badge bg-warning">Edit</button></a>
                <a><button class="badge bg-danger">Hapus</button></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('excel') ?>"><button class="badge bg-info">Download</button></a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>Assets/js/datatables-simple-demo.js"></script>
</body>
</html>