<?php  

$mahasiswa = [
[
    'gambar' => 'iron man.jpg',
    'nrp' => '233040112',
    'nama' => 'Tony Stark',
    'email' => 'ironman@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'captain amerika.jpg',
    'nrp' => '233040111',
    'nama' => 'Steve Rogers',
    'email' => 'captainamerika@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'black phanter.jpg',
    'nrp' => '233040122',
    'nama' => 'Tchalla',
    'email' => 'blackphanter@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'captain marvel.jpg',
    'nrp' => '233040123',
    'nama' => 'Carol Danvers',
    'email' => 'captainmarvel@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'deadpool.jpg',
    'nrp' => '233040124',
    'nama' => 'Wade Wilson',
    'email' => 'deadpool@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'doctor strange.jpg',
    'nrp' => '233040125',
    'nama' => 'Steven Strange',
    'email' => 'doctorstrange@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'hulk.jpg',
    'nrp' => '233040126',
    'nama' => 'Bruce',
    'email' => 'hulk@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'spider man.jpg',
    'nrp' => '233040127',
    'nama' => 'Peter Parker',
    'email' => 'spiderman@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'thor.jpg',
    'nrp' => '233040128',
    'nama' => 'Thor',
    'email' => 'thor@gmail.com',
    'jurusan' => 'Avenger'
],
[
    'gambar' => 'star lord.jpg',
    'nrp' => '233040129',
    'nama' => 'Peter Quill',
    'email' => 'starlord@gmail.com',
    'jurusan' => 'Avenger'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>