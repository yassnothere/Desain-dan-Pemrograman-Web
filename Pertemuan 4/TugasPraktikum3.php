<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita Praktikum 3</title>
</head>

<style>
        body {
            font-family: 'Segoe UI', Tahoma, Genev, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            background-color: #4CAF50;
            width: 100%;
            padding: 20px 0;
            text-align: center;
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            display: flex;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15), 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            border: 1px solid #ddd;
            max-width: max-content;
            background-color: #ffffff;
        }

        td {
            padding: 5px;
        }

        .container img {
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .container img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .box {
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15), 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            text-align: center;
            margin-bottom: 20px;
        }

        .keterangan {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 20px;
        }

        .sold, .avaliable {
            gap: 10px;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            padding: 10px 20px;
            border: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            text-align: center;
            background-color: #ffffff;
        }

        .sold img, .avaliable img {
            margin-top: 10px;
        }

        .persentase {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        h4 {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        h2 {
            margin: 5px 0;
            font-size: 2rem;
        }
    </style>

<body>
    <?php
    $allKursi = 45;
    $soldKursi = 28;
    $sisaKursi = $allKursi - $soldKursi;
    $percentage = $sisaKursi / $allKursi * 100;
    ?>
    <header>
        <h1>Tempat Duduk di Dalam Resto</h1>
    </header>
    <div class="container">
        <table>
            <?php
            $count = 1;
            $image ="";
            for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <?php
                    for ($j = 0; $j < 9; $j++) {
                        $count <= $soldKursi ? $image='Kursi.jpg': $image='KursiKosong.png';
                    ?>
                        <td>
                            <img src=<?php echo"{$image}"?> alt="" width="50px" height="50px">
                        </td>
                    <?php
                    $count++;
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="persentase">
        <div class="box">
            <h4>Persentase Kursi Kosong</h4>
            <h2><?php echo (int)$percentage ?> %</h2>
        </div>
    </div>
    <div class="keterangan">
            <div class="sold">
                <h2><?php echo $sisaKursi ?></h2>
                <img src="kursikosong.png" alt="" width="50px" height="50px">
                <h5>Kursi Kosong</h5>
            </div>
            <div class="avaliable">
                <h2><?php echo $soldKursi ?></h2>
                <img src="kursi.jpg" alt="" width="50px" height="50px">
                <h5>Kursi Telah Terisi</h5>
            </div>
    </div>
</body>

</html>