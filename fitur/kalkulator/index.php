<html>
    <head>
        <title>Fitur Yang Tersedia</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../../bg.css">
        <link rel="stylesheet" href="../back.css">
    </head>
    <body>
        <div class="atas1">
            <div class="back">
                <a href="../index.php">
                    <svg id="BackButton" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
                        <path id="ic_radio_button_unchecked_24px" d="M42,2A40,40,0,1,0,82,42,40.015,40.015,0,0,0,42,2Zm0,72A32,32,0,1,1,74,42,31.991,31.991,0,0,1,42,74Z" transform="translate(-2 -2)" fill="#686868"/>
                        <path id="ic_code_24px" d="M26.339,41.3,11.209,25.984,26.339,10.663,21.734,6,2,25.984,21.734,45.967Z" transform="translate(25.831 14.016)" fill="#686868"/>
                    </svg>
                </a>
            </div>
            <div class="card">
                <h1>Kalkulator</h1>

                <center>
                    <form method="post">
                        <table>
                            <tr>
                                <td>
                                    <input type="number" name="nilai1" placeholder="Masukan nilai pertama" autocomplete="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="number" name="nilai2" placeholder="Masukan nilai kedua" autocomplete="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <button type="submit" name="tambah" class="htg1">+</button>
                                        <button type="submit" name="kurang" class="htg1">-</button>
                                        <button type="submit" name="kali" class="htg1">×</button>
                                        <button type="submit" name="bagi" class="htg1">:</button>
                                        <button type="submit" name="modulus" class="htg1">%</button>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div class="fungsi">
                        <?php
                            if (isset($_POST['tambah'])) {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                echo $nilai1 + $nilai2;
                            }
                    
                            if (isset($_POST['kurang'])) {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                echo $nilai1 - $nilai2;
                            }
                    
                            if (isset($_POST['kali'])) {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                echo $nilai1 * $nilai2;
                            }
                    
                            if (isset($_POST['bagi'])) {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                echo $nilai1 / $nilai2;
                            }
                    
                            if (isset($_POST['modulus'])) {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                echo $nilai1 % $nilai2;
                            }
                        ?>
                    </div>
                    <div class="garis">Hasil</div>
                </center>
            </div>
        </div>
    </body>
</html>