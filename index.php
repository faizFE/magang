<?php
session_start();
if(isset($_SESSION['status'])) {
    header('location: dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-5">Login Form php</h1>
    <div class="container text-center">
        <div class="mt-5">
            <form action="login.php" method="POST">
                <p name="pesan"><strong><?= $_SESSION['pesan'] ?? ''; ?></strong></p>
                <div>
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" id="username" placeholder="Username" name="username">
                </div>
                <div>
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" id="password" placeholder="Password" name="password">
                </div>
                <button class="btn btn-primary" id="button">Masuk</button>      
            </form>
        </div>
    </div>

    <!-- <script>
        const username = "faiz"
        const password = "1234"

        const usernameInput = document.querySelector('#username');
        const passwordInput = document.querySelector('#password');
        const loginButton = document.querySelector('#button');

        loginButton.addEventListener('click', () => {
            let msgAlert = 'tombol ditekan'
            const Valueusername = usernameInput.value;
            const Valuepassword = passwordInput.value;
            if (Valueusername === '' && Valuepassword === '') {
                msgAlert = 'masukan username dan password'
            } else if (usernameInput.value === ''){
                msgAlert = 'masukkan username'
            } else if (passwordInput.value === ''){
                msgAlert = 'masukkan password'
            } else if (usernameInput.value !== username && passwordInput.value !== password) {
                msgAlert = 'username dan password salah'
            } else if (usernameInput.value !== username) {
                msgAlert = 'username salah'
            } else if (passwordInput.value !== password) {
                msgAlert = 'password salah'
            } else {
                window.location.href = 'testing.html'; 
                msgAlert = 'Berhasil Masuk'
            }
            alert(msgAlert);
        })

    </script> -->
</body>

</html>