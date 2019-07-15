<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch ($page) {
	case 'head':
	include 'modul/mod_header/header.php';
	break;
	case 'menu':
	include 'modul/mod_menu/konten.php';
	break;
	case 'amenu':
	include 'modul/mod_menu/aksi_konten.php';
	break;
	case 'akun':
	include 'modul/mod_admin/admin.php';
	break;
	case 'aakun':
	include 'modul/mod_admin/aksi_admin.php';
	break;
	case 'edit':
	include 'modul/mod_edit/edit.php';
	break;
	case 'aedit':
	include 'modul/mod_edit/aksi_edit.php';
	break;
	case 'sub':
	include 'modul/mod_sub_menu/subkonten.php';
	break;
	case 'asub':
	include 'modul/mod_sub_menu/aksi_sub.php';
	break;
	default:
	include 'dashboard.php';
	break;
}
?>

<?php
// $page = isset($_GET['page']) ? $_GET['page'] : null;
// switch ($page) {
// 	case 'head':
// 	include 'header.php';
// 	break;
// 	case 'menu':
// 	include 'd_konten.php';
// 	break;
// 	case 'emenu':
// 	include 'f_konten.php';
// 	break;
// 	case 'akun':
// 	include 'd_admin.php';
// 	break;
// 	case 'eakun':
// 	include 'f_admin.php';
// 	break;
// 	case 'edit':
// 	include 'd_edit.php';
// 	break;
// 	case 'eedit':
// 	include 'f_custom.php';
// 	break;
// 	default:
// 	include 'dashboard.php';
// 	break;
// }

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

