<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga Diskon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../bg.css">
    <link rel="stylesheet" href="../back.css">
</head>
<body>
    <div class="back">
        <a href="../index.php">
            <svg id="BackButton" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
                <path id="ic_radio_button_unchecked_24px" d="M42,2A40,40,0,1,0,82,42,40.015,40.015,0,0,0,42,2Zm0,72A32,32,0,1,1,74,42,31.991,31.991,0,0,1,42,74Z" transform="translate(-2 -2)" fill="#686868"/>
                <path id="ic_code_24px" d="M26.339,41.3,11.209,25.984,26.339,10.663,21.734,6,2,25.984,21.734,45.967Z" transform="translate(25.831 14.016)" fill="#686868"/>
            </svg>
        </a>
    </div>
    <div class="card">
        <h1>Menghitung Harga Diskon</h1>
        <form action="" method="post">
            <input type="number" name="hargaAwal" placeholder="Harga Awal">
            <input type="number" name="persenDiskon" placeholder="Persentase Diskon"><br>
            <button type="submit" name="hitung">Hitung</button>
        </form>
        <div class="logika">
            <?php 
                if (isset($_POST['hitung'])) {
                    $hargaAwal = $_POST['hargaAwal'];
                    $persenDiskon = $_POST['persenDiskon'];

                    $besarDiskon = $hargaAwal * $persenDiskon / 100;
                    echo "Besar Diskon : Rp " . $besarDiskon;
                    echo "<br>";
                    echo "Harga Diskon : Rp " . $hargaAwal - $besarDiskon;
                }
            ?>
        </div>
    </div>
</body>
</html>