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
ob_start();
if (isset($_GET['2wsxzaq1'])) {
	$aksi = $_GET['2wsxzaq1'];
} else {
	$aksi = "";
}

if (isset($_GET['1qazxsw2'])) {
	$id = $_GET['1qazxsw2'];
} else {
	$id = "";
}

//=========================================================Get Aksi=============================================
if ($aksi) {
	if ($aksi == "qw" && !empty($id)) {
		$row = $db->select("select * from tb_sub_konten where id=?", [$id]);
		$btn = "Edit";
		$nama = $row['nama'];
		$status = $row['status'];
		$url = $row['url'];
		$id_konten = $row['id_konten'];
				//$db->Close();
	} else if ($aksi == "qa" && !empty($id)) {
		$result = $db->cud("delete from tb_sub_konten where id=?", [$id]);
		if ($result) {
			echo "<script>alert('Sukses menghapus Data')</script>";
			$db->Close();
			echo $db->redirect('?page=sub');
		} else {
			echo "<script>alert('Gagal menghapus Data')</script>";
			echo $db->redirect('?page=sub');
		}
	}
} else {
	$btn = "Simpan";
	$nama = '';
	$status = '';
	$url = '';
	$id_konten = '';
}
?>
<section id="breadcrumb">
	<ol class="breadcrumb">
		<li class="active">Dashboard/Form Sub Menu Portal</li>
	</ol>
</section>

<div class="card">
	<h3 class="card-header text-center">Form Sub Menu Portal</h3>
	<div class="card-body">
		<form class="" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="caption">Nama</label> </br>
				<input type="text" name="nama" required="true" class="form-control" value="<?php echo $nama ?>" >
			</div>
			<div class="form-group">
				<label for="caption">Alamat/URL</label> </br>
				<input type="text" name="url" required="true" class="form-control" value="<?php echo $url ?>" >
			</div>
			<div class="form-group">
				<label for="">Pilih Menu Utama</label>
				<select class="form-control" name="id_konten" required="true">
					<?php
					$a = $db->selectall("SELECT * from tb_konten ");
					foreach ($a as $row) {
						if ($row['id'] == $id_konten) {
							$select = "selected";
						} else {
							$select = "";
						}?>
						<option value='<?php echo $row['id'] ?>' <?php echo $select ?>><?=$row['nama']?></option>";
						<?php
					}

					?>
				</select>
			</div>
			<div class="form-group">
				<label>Aktif</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" id="1" value="1" <?php echo $status == "1" ? "checked" : " " ?>>YA
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="status" id="0" value="0" <?php echo $status == "0" ? "checked" : " " ?>>TIDAK
					</label>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-2">
					<button type="submit" name="kirim" class="btn btn-primary"><?php echo "$btn" ?></button>
				</div>
				<div class="col-md-2">
					<button type="reset" name="reset" class="btn btn-danger">Reset</button>
				</div>
				<div class="col-md-2">
					<a href="?page=sub"><button type="button" name="kembali" class="btn btn-danger">Batal</button></a>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$status = $_POST['status'];
	$url = $_POST['url'];
	$konten = $_POST['id_konten'];
	if ($aksi == "qw") {
		$update = $db->cud("UPDATE tb_sub_konten SET nama =?, url=?, status = ?, id_konten=? WHERE id =?", [$nama, $url, $status, $konten, $id]);
		if ($update) {
			echo "<script>alert('Sukses Mengubah Data')</script>";
			$db->Close();
			echo $db->redirect('?page=sub');
		} else {
			echo "<script>alert('UPDATE Gagal!');</script>";
		}

	} else {
		$kirim = $db->cud("INSERT into tb_sub_konten values(?,?,?,?,?)", [null, $nama, $url, $status, $konten]);
		//$db->redirect('./?page=lokasi');
		if ($kirim) {
			echo "<script>alert('Sukses Menambahkan Data')</script>";
			$db->Close();
			echo $db->redirect('?page=sub');
		} else {
			echo "<script>alert('UPDATE Gagal!');</script>";
		}
	}

	$db->close();
}
ob_end_flush();
?>