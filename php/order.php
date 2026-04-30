<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM USER WHERE username = '$username' AND password = '$password'";

    if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Login Berhasil');
            window.location.href='order.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Coffe - Order Form</title>
    <link rel="stylesheet" href="../Style/style.css">
    <style>
        .order-container { 
            min-height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            background: #f4f1ee; 
            padding: 20px;
        }

        .order-card { 
            background: #fff; 
            padding: 30px; 
            width: 100%; 
            max-width: 450px; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .order-card h1 {
            text-align: center;
            color: #3e2723;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .form-group { 
            margin-bottom: 20px;
        }

        .form-group label { 
            display: block; 
            font-size: 0.9rem; 
            font-weight: bold;
            margin-bottom: 8px; 
            color: #5d4037; 
        }

        .form-group select, .form-group input {
            width: 100%; 
            padding: 12px; 
            border: 1px solid #ddd; 
            border-radius: 6px;
            font-family: inherit;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #3e2723;
            background-color: #fdfaf8;
        }

        .order-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .btn-order {
            background: #3e2723;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-order:hover {
            background: #5d4037;
        }

        #backHome {
            font-size: 0.8rem;
            color: #8d6e63;
            text-decoration: none;
        }

        #backHome:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section class="order-container">
    <div class="order-card">
        <h1>Place Your Order</h1>

        <form action="proses_order.php" method="POST">
            <div class="form-group">
                <label for="jenis_kopi">Jenis Kopi</label>
                <select name="jenis_kopi" id="jenis_kopi" required>
                    <option value="" disabled selected>-- Pilih Kopi Anda --</option>
                    <option value="Arabika Gayo">Arabika Gayo - Rp 165.000</option>
                    <option value="Arabika Toraja">Arabika Toraja - Rp 175.000</option>
                    <option value="Robusta Temanggung">Robusta Temanggung - Rp 145.000</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah (Pack/Cangkir)</label>
                <input type="number" id="jumlah" name="jumlah" min="1" placeholder="Masukkan jumlah" required>
            </div>

            <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select name="metode_pembayaran" id="metode_pembayaran" required>
                    <option value="" disabled selected>-- Pilih Pembayaran --</option>
                    <option value="Tunai">Tunai (Cash)</option>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="QRIS">QRIS / E-Wallet</option>
                </select>
            </div>

            <div class="order-footer">
                <a href="../index.php" id="backHome"> Kembali ke Beranda</a>
                <button type="submit" class="btn-order">Pesan Sekarang</button>
            </div>
        </form>
    </div>
</section>

</body>
</html>