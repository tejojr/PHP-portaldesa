<!-- Modal -->
<div class="modal fade" id="v<?php echo $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">Sub Menu <?php echo $a['nama'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
$nom = $a['id'];
$s = $db->selectall("SELECT * FROM tb_sub_konten where id_konten=? and status=?", [$nom, '1']);
foreach ($s as $sub) {
	?>
        <a href="<?php echo 'http://' . $sub['url'] ?>" target= "_blank" class="btn btn-primary btn-arrow-right btn-block"><?php echo $sub['nama']; ?></a>
        <?php
}
?>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>