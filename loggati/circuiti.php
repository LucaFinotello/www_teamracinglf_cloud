<?php
	session_start();
	include_once('../mysql-fix.php');
	include('../db_con.php');
	include ('header.html');

?>
		<div id="main">
			<?php include('findDevice.php') ?>
		<div id="contenuto">
			<span id="path">Ti trovi in: <a href="home1.php">Home</a> &#187; Circuiti</span>
			<div class="container">
			<div class="menu1">
				<ul>
					<li><a href="#"><?php echo $_SESSION['username'];
									$q = mysqli_query($conn, "SELECT * FROM clienti WHERE username = '".$_SESSION['username']."'");
						?></a>
					   <ul>
							<li><a href="profilo.php">Modifica profilo</a></li>
							<li><a href="modifica.php">Modifica password</a></li>
							<li><a href="elimina.php">Elimina account</a></li>
							<li><a href="../logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			</div>
			<div id="field">
				<form action="ricerca1.php" method="POST">
					<fieldset>
						<legend>ricerca circuito</legend>
						Circuito: <input name="circuito" type="search" value="" required/>
						Stato: <input name="stato" type="text" value="" required/>
						Paese: <input name="paese" type="text" value="" required/>
						<input type="submit" name="invia" value="invia">
					</fieldset>
				</form>
			</div>
			
			<?php
			$strsql = "select * from circuiti";
			$risultato = mysqli_query($conn, $strsql);
			if (! $risultato)
			  {
			   echo "Errore nel comando SQL" . "<br>";
			  }
			$riga = mysqli_fetch_array($risultato);
			if (! $riga)
				  {
				   echo "nessun circuito inserito";
				  }
				else
				{
			     while ($riga)
					{
						echo "<form action='dettagli1.php' method='POST'>";
						echo "<div id='myMenu' class='Box_Contenitore'><h2>".$riga["circuito"]."</h2>";
						echo "<input readonly name='id' type='text' value=".$riga["id"]." hidden='false'>";
						echo "<img src='../immagini/".$riga["immagine"]."' alt='".$riga["immagine"]."'>";
						echo "<input type='submit' name='dettagli' value='dettagli' /></div>";
						echo "</form>";
						$riga = mysqli_fetch_array($risultato);
					}
				}
				?>
			</div>
		</div>
	</div>
<?php
    include ('footer.html');
?>

<script>
    function myFunction() {
        var input, filter, div, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        div = document.getElementById("myMenu");
        for (i = 0; i < div.length; i++) {
            a = div[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                div[i].style.display = "";
            } else {
                div[i].style.display = "none";
            }
        }
    }
</script>