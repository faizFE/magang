<?php
session_start();
if(!(isset($_SESSION['status']))){
    header('location: index.php');
}

// unset($_SESSION['pesan']);

// if(isset($_SESSION['pesan'])) {
//     $_SESSION['pesan'] = "login berhasil";
// }

// if(empty($_GET['kata'])) {
//     $_GET['kata'] = ('tes');
// }

// if(empty($_GET['kata'])) {
//     $_GET['kata'] = 'testt';
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card border-3 border-primary rounded-90 m-auto" style="width: 50rem;">
            <h1 class="text-center mt-5">Dashboard</h1>
            <div class="container">
                <div class="mt-5">
                    <form action="cetak.php" method="GET">
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <div class="d-flex flex-column">
                                <p><strong><?= $_SESSION['pesan'] ?? ''; ?></strong></p>
                                <p><strong><?= $_SESSION['kata'] ?? '';?></strong></p>
                                <label for="" class="">Cetak Kata</label>
                                <input type="text" placeholder="masukkan kata" id="kata" class="rounded-2 border-1"
                                    style="width: 20rem;" name="kata">
                            </div>
                            <button class="btn btn-outline-primary" id="button">Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center my-5">
                <a href="logout.php"><button class="btn btn-danger">Keluar</button></a>
            </div>
        </div>
    </div>

    <!-- <script>
        const angka = document.querySelector('#angka');
        const buttonTest = document.querySelector('#button');

        buttonTest.addEventListener('click', () => {
            const valueAngka = angka.value;
            if (valueAngka % 2 === 0) {
                msgalert = 'angka genap'
            } else {
                msgalert = 'angka ganjil'
            }
            alert(msgalert);
        })
    </script> -->
</body>
</html>