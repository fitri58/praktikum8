<body>
<div class="col-md-12">
 <h3>
 Detail Dosen
 </h3>
 <table border="1" class="table">
 <thead>
 <tr>
<th>No</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Gender</th>
<th>Nidn</th>
<th>Pendidikan</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td> <?= $siswa -> id ?></td>
 <td> <?= $siswa -> nama ?></td>
 <td> <?= $siswa -> tmp_lahir ?></td>
 <td> <?= $siswa -> tgl_lahir ?></td>
 <td> <?= $siswa -> gender ?></td>
 <td> <?= $siswa-> nidn?></td>
 <td> <?= $siswa-> pendidikan?></td>
 </tr>
 </tbody>
 </table>
</div>
</body>
</html>