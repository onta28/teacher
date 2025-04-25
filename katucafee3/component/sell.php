<!doctype html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Lao:wght@100..900&display=swap" rel="stylesheet">
    <title>ການຂາຍ</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Noto Serif Lao", serif;
        }

        .sidebar {
            height: 100vh;
        }
    </style>
</head>

<body class="bg-light"> <!-- ເປັນການກໍານົດພື້ນຫລັງເປັນສີອອນ -->
    <div class="">
        <?php
        include("nav.php"); ?>
        <div class="row">
            <?php include_once("sidbar.php"); ?>
            <main class="col-lg-10 p-1"><?php include_once("../pages/showsell.php");?></main>
        </div>
    </div>
    <script>
        function confirmDelete(event, url) {
            event.preventDefault(); // ປ້ອງກັນການ Redirect ທັນທີ
            Swal.fire({
                title: 'ຢືນຢັນການລົບ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'ລົບ',
                cancelButtonText: 'ຍົກເລີກ'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // ຖ້າຍືນຢັນ ກະເມັນຈະໄປທີ່ URL
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> <!-- ใช้ JavaScript ของ Bootstrap -->
</body>

</html>