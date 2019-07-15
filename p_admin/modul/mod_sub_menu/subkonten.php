<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/ Sub Menu Portal</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header">Sub Menu Portal</h3>
  <div class="card-body">
    <a href="?page=asub" class="btn btn-danger"><i class="fa fa-user-plus"></i></a><br/>
    <div class="table-responsive">
     <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead class="thead-light">
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Menu Utama</th>
          <th scope="col">URL</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
      $no = 1;
      $row = $db->selectall("SELECT * FROM tb_sub_konten");
      foreach ($row as $a) {
                ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $a['nama']; ?></td>
          <td>

            <?php

            $b=$db->select("SELECT * FROM tb_konten where id = ? ",[$a['id_konten']]);
            echo $b['nama'];
            ?></td>
            <td><?php echo $a['url']; ?></td>
            <td><?php $stat = $a['status'];
            if ($stat == "1") {
              echo 'Aktif';
            } else {
              echo "Tidak Aktif";
            }

            ?></td>
            <td>
              <a href="?page=asub&2wsxzaq1=qw&1qazxsw2=<?php echo $a['id'] ?>"><i class="fa fa-edit" alt="edit" title="edit"></i></a>
              <a onclick="return confirm('Are you sure you want to delete this item?');" href="?page=asub&2wsxzaq1=qa&1qazxsw2=<?php echo $a['id'] ?>"><i class="fa fa-trash" alt="delete" title="delete"></i></a>
            </td>
          </tr>
          <?php $no++;}?>
        </table>
      </div>
    </div>
  </div>
  <?php 
/*
===============backend======
@author Ammar Annajih Pasifiky
@SMK N 1 Purbalingga
@fb: Ammar Annajih Pasifiky
@instagram: zeref.weismann
@github :tejojr
@no_hp : 085713444859

===============frontend====
@auhor Juon Junior
*/
   ?>
