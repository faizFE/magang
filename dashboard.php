<?php
session_start();
if(!(isset($_SESSION['status']))){
    header('location: index.php');
}
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
    <h1 class="text-center">Dashboard</h1>
    <div class="container text-center">
        <div class="mt-5">
            <form action="">
                <div>
                    <label for="angka">Testing angka</label>
                    <input type="text" placeholder="masukkan angka" id="angka">
                </div>
                <div class="mt-4"> 
                    <button class="btn btn-outline-primary" id="btn">Test</button>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="logout.php"><button class="btn btn-danger" name="button">Keluar</button></a>
    </div>

    <!-- <script>
        const angkaInput = document.querySelector('#angka')
        const buttonTest = document.querySelector('#btn')

        buttonTest.addEventListener('click', () => {
            let alert = 'cek'
        })
    </script> -->
</body>
</html>