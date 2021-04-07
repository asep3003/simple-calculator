<html>
    <head>
        <title>Menentukan Luas Segitiga</title>
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
            <h1>Menentukan Luas Segitiga</h1>

            <form method="post">
                <input type="number" name="alas" placeholder="Masukan alas" autocomplete="off" required><br>
                <input type="number" name="tinggi" placeholder="Masukan tinggi" autocomplete="off" required><br>
                <button type="submit" name="proses">Proses</button><br>
            </form>

            <div class="logika">
                <?php
                    if (isset($_POST['proses'])) {
                        $alas = $_POST['alas'];
                        $tinggi = $_POST['tinggi'];

                        $luas = 1/2 * $alas * $tinggi;
                        echo "L = " . $luas . " cm<sup>2</sup>";
                    }
                ?>
            </div>

        </div>
    </body>
</html>