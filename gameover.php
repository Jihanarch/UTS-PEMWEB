<?php
session_start();
if($_SESSION['lives'] > 0){
    echo $_SESSION['lives']; 
    header("Location: soal.php");
}

include("crud.php");
$lib = new Crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathemathics Game!</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <body align = center>
    <center>
        <form action = "" method = "post" style="width:50%;">
            <body class="bg-dark">
                <div class="container vh-100">
                    <div class="row flexbox-container">
                        <div class="col">
                        <div class="box">

                        <div class="form-group">
                            <p class="teks text-light text-center">Hello, <?php echo $_SESSION['name']; ?>… Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</p>
                            <p class="teks small text-light text-center">Score : <?php echo $_SESSION['score']; ?></p>
                        </div>
        
                        <div class="form-group">
                            <a href="index.php" class="btn btn-info">Main Lagi</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center text-light" scope="col">No</th>
                                    <th class="text-center text-light" scope="col">Nama</th>
                                    <th class="text-center text-light" scope="col">Score</th>
                                    <br>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
                                $select = $lib->read('scores','ORDER BY score DESC LIMIT 10');
                                foreach ($select as $value){
                                    echo '<tr>';
                                    echo '<td class="text-center text-light">'.$no.'</td>';
                                    echo '<td class="text-center text-light">'.$value['name'].'</td>';
                                    echo '<td class="text-center text-light">'.$value['score'].'</td>';
                                    echo '</tr>';
                                    $no+=1;
                                }
                            ?>
                            </tbody>

                        </table>
                    </div>
        </div>
    </div>
</div>

</body>
</html>