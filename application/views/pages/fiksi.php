<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Pengarang</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($bukufiksi as $bf) : ?>
    <tr>
      <th scope="row"><?= $bf['id_buku'];?></th>
      <td><?= $bf['judul_buku']; ?></td>
      <td><?= $bf['tahun_terbit'] ?></td>
      <td><?= $bf['pengarang'] ?></td>
    </tr>


  <?php endforeach; ?>
  </tbody>
</table>