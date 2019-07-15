<?php 

if (!$db->inlogin()) {
	$db->redirect('index.php');
}
$uid = $_SESSION['uid'];
$siki = $db->select('SELECT * FROM tb_admin where id=?', [$uid]);
$nama = $siki['nama'];
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

 