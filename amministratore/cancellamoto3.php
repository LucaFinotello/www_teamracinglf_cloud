<?php
session_start();
include("db_con.php");
include_once('mysql-fix.php');
include ('header.html');
?>
    <div id="main">
        <div class="container">
            <?php include ('menuDesktopAmministratore.html') ?>
        </div>
        <div id="contenuto">
            <?php
            $id = $_POST['id'];
            $strsql = "delete from moto3 where id='$id'";
            $risultato = mysqli_query($conn, $strsql);
            if (! $risultato)
            {
                echo "Errore nel comando SQL" . "<br>";
            } else {
                header("location:moto3.php");
            }
            ?>
            <p><a href="moto3.php"><button>Annulla</button></a></p>
        </div>
    </div>
<?php include ('footerAmmnistratore.html'); ?>