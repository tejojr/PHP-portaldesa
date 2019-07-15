<?php
ob_start();
session_start();
include_once "../config/Database.php";
$db = new Database();
include_once "cek_login.php";
?>

<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="shortcut icon" href="../../assets/favicon/favicon.png"> -->
  <title>Dashboard Portal</title>
  <!--   <link rel="icon" href="../../asset/foto/logo.png" type="image/icon"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="../assets/favicon/favicon.png">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <script src="../assets/jscolor/jscolor.js"></script>
  <script src="../assets/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: "textarea.mce",
      plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste imagetools wordcount"
      ],
      menubar : false,
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
</head>
<body>
  <?php 
  include "head.php";
  ?>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="margin-top: 35px;">
        <?php include "nav.php" ?>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="margin-top: 40px">
        <?php include"switch.php" ?>
      </main>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

      <script type="text/javascript">
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#picture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function() {
          readURL(this);
        });

      </script>


    </body>
    </html>
    <?php
    ob_end_flush();
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