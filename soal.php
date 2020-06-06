<?php
session_start();
$a = rand(0,20);
$b = rand(0,20);
if($_SESSION['lives'] <= 0){
    echo $_SESSION['lives']; 
    header("Location: gameover.php");
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
<body align = center>
    <center>
        <form action = "" method = "post" style="width:50%;">
            <body class="bg-dark">
                <div class="container vh-100">
                    <div class="row flexbox-container">
                        <div class="col">
                        <div class="box">
                        <div class="form-group">
                            <p class="teks text-light text-center">Hallo <?php echo $_SESSION['name']; ?>, tetap semangat ya… you can do the best!!</p>
                            <p class="teks small text-light text-center">Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></p>
                        </div>
                        <div class="form-group">
                            <p class="teks text-info text-center">Berapakah <?php echo $a; ?> + <?php echo $b; ?> =</label>
                            <input type="hidden" name="a" value="<?php echo $a; ?>">
                            <input type="hidden" name="b" value="<?php echo $b; ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  name="isi" placeholder="Masukkan Jawaban" type="number" required>
                        </div>
                        <div class="form-group">
                            <button name="jawab" type="submit" value="jawab!">jawab!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            </body>
        </html>
<?php 
if($_POST['jawab']){
    if($_POST['isi'] == $_POST['a']+$_POST['b']){
        $_SESSION['score'] += 10;
        header("Location: hasil.php?result=success");
    }else{
        $_SESSION['lives'] -= 1;
        $_SESSION['score'] -= 2;
        if($_SESSION['lives'] > 0){
            header("Location: hasil.php?result=failed");
        } else {
            include("crud.php");
            $lib = new Crud();
            $insert = $lib->create('scores', array('name'=>$_SESSION[name],'score'=>$_SESSION['score']));
            header("Location: gameover.php");
        }
        
    }
}
?>