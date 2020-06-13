<?php
//Jajang Jamaludin
require_once "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pengelolaan Data Siswa dengan PHP 7, MySQLi, dan Bootstrap 4">
    <meta name="keyword" content="Aplikasi Pengelolaan Data Siswa dengan PHP 7, MySQLi, dan Bootstrap 4">
    <meta name="author" content="Indra Styawantoro">

    <link rel="shortcut icon" href="assets/img/STMIK.png">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-botton shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-user title-icon"></i> Data Siswa</h5>
        </div>
    </div>

    <div class="container-fluid">
        <?php
        if (empty($_GET['page'])) {
            include "tampil_data.php";
        } elseif ($_GET['page'] == 'tambah') {
            include "form_tambah.php";
        } elseif ($_GET['page'] == 'ubah') {
            include "form_ubah.php";
        }
        ?>
    </div>
    <div class="container-fluid">
        <footer class="pt-4 my-md-4 pt-md-3 border-top">
            <div class="row">
                <div class="col-12 col-md center">
                <br>
                    <h6 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-code"></i>JAJANG JAMALUDIN</h6>
                    </br>
                    &copy; 2020 - <a class="text-info" href="https://stmik-sumedang.ac.id/">STMIK Sumedang</a>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.2-web/js/all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        } );
//Jajang Jamaludin
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');

                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        function getkey(e) {
            if (window.event)
                return window.event.keyCode;
            else if (e)
                return e.which;
            else
                return null;
        }

        function goodchars(e, goods, field) {
            var key, keychar;
            key = getkey(e);
            if (key == null) return true;

            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods = goods.toLowerCase();

            if (goods.indexOf(keychar) != -1)
                return true;
            if (key==null || key==0 || key==8 || key==9 || key==27 )
                return true;

            if (key == 13) {
                var i;
                for (i = 0; i < field.form.elements.length; i++)
                    if (field == field.from.elements[i])
                        break;
                i = (i + 1) % field.from.elements.length;
                field.from.elements[i].focus();
                return false;
            };
            return false;
        }

        function validasiFile() {
            var fileInput = document.getElementById('foto');
            var filePath = fileInput.value;
            var fileSize = $('#foto')[0].files[0].size;

            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe file foto tidak sesuai. Harap unggah file foto yang memiliki tipe *.jpg atau *.png');
                fileInput.value = '';
                document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
                return false;
            } else if (fileSize >= 10000000) {
                alert('Ukuran file foto lebih dari 1 Mb. Harap unggah file foto yang memiliki ukuran maksimal 1 Mb.');
                fileInput.value = '';
                document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
                return false;
            }
            else {
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="'+e.target.result+'"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
            }//Jajang Jamaludin
        }}
    </script>
</body>
</html>