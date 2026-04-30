<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Le Coffe</title>
    <link rel="stylesheet" href="../Style/style.css"> 
    <style>
        h1 {
            text-align: center; 
        }
        .form-footer {
            display: flex;
            justify-content: space-between; /* Tombol ke kiri, Link ke kanan */
            align-items: center;            /* Agar tombol dan teks sejajar secara vertikal */
            margin-top: 20px;
            width: 100%;
        }

        #noAkun {
            font-size: 0.8rem;
            color: #666;
            text-decoration: none;
            transition: 0.3s;
        }

        #noAkun:hover {
            color: #3e2723; /* Warna cokelat Le Coffe */
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section class="order-container">
    <div class="order-card">
        <h1>Login</h1>

        <form action="order.php" method="POST" class="order-form">
            <div class="form-group">
                <label for="username">Username Lengkap</label>
                <input type="text" id="username" name="username" placeholder="Masukan Nama Anda" required>
                <label id="namaError">.</label>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
                <label id="passwordHPError">.</label>
            </div>
            
            <div class="form-footer">
                <button id="tombolCek" type="submit" class="btn-order">Login</button>
                <label><a href="signIn.php" id="noAkun">Belum punya akun?</a></label>
            </div>        
        </form>
    </div>
</section>

<script src="../Js/cekOrder.js"></script>

</body>
</html>