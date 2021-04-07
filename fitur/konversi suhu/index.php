<html>
    <head>
        <title>Konversi Suhu</title>
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
            <h1>Konversi Suhu Dari Celcius</h1>

            <form method="post">
                <input type="number" name="suhu" autocomplete="off" required placeholder="Masukan suhu"><br>
                <button type="submit" name="konversi">Konversi</button>
            </form>

            <?php
                if (isset($_POST['konversi'])) {
                    $suhu = $_POST['suhu'];
                    
                    $fahrenheit = ($suhu * 9/5) + 32;
                    echo "Fahrenheit = " . $fahrenheit;
                    echo "<br>";

                    $kelvin = $suhu + 273.15;
                    echo "Kelvin = " . $kelvin;
                    echo "<br>";

                    $reamur = 4/5 * $suhu;
                    echo "Reamur = " . $reamur;
                    echo "<br>";
                }
            ?>
        </div>
    </body>
</html>