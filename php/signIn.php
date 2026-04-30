<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Le Coffe</title>
    <link rel="stylesheet" href="../Style/style.css"> 
    <style>
        h1 {
            text-align: center; 
        }
    </style>
</head>
<body>

<section class="order-container">
    <div class="order-card">
        <h1>Sign In</h1>

        <form action="../index.php" method="POST" class="order-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukan Nama Anda" required>
                <label id="namaError">.</label>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
                <label id="emailError">.</label>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
                <label id="passwordHPError">.</label>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat Pengiriman</label>
                <textarea id="alamat" name="alamat" rows="4" placeholder="Tulis Alamat Lengkap Anda" required></textarea>
                <label id="alamatError">.</label>
            </div>

            <button type="submit" id="tombolCek" class="btn-order">Sign In</button>   
        </form>
    </div>
</section>

<script src="../Js/cekLogin.js"></script>

</body>
</html>