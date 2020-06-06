<?php
session_start();
if($_GET['result'] == 'success'){
    $result = "Hallo ".$_SESSION['name']." Selamat jawaban Anda benar…";
} else if($_GET['result'] == 'failed'){
    $result = "Hallo ".$_SESSION['name'].", Sayang jawaban Anda salah… tetap semangat ya !!!";
}
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

                    <!-- =================================================================== -->
                        <div class="form-group">
                            <p class="teks text-light text-center"><?php echo $result; ?></p>
                            <p class="teks small text-light text-center">Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></p>
                        </div>
        
                        <div class="form-group">
                            <a href="soal.php" >Soal Selanjutnya</a>
                        </div>
                    <!-- =================================================================== -->
               </div>
        </div>
    </div>
</div>
   
</body>
</html>