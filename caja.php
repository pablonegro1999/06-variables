
<?php
	if(!isset($_GET['a'])) $_GET['a']=10;
	if(!isset($_GET['b'])) $_GET['b']=20;		
	
?>

<b><H3>Queremos fabricar una caja de base cuadrada, de tal manera que la altura de la caja más el perímetro de la base sumen 60 cm. Determina sus dimensiones para que contenga el mayor volumen posible </H3></b>
<td rowspan=2><img src="caja.jpg" width="550"> </td>

	<td>lado</td>
	<td><input id="a" name="a" placeholder="lado" onkeyup="calcular()" value="<?=$_GET['a']?>"/> cm</td>	</br>

<p> 
	<td>altura</td>
	<td><input id="b" name="b" placeholder="altura" onkeyup="calcular()" value="<?=$_GET['b']?>"/> cm</td></br></p>


	<td colspan=2><button>calcular</button></center></td>

		
</br>	
</br>
<center><b>JAVA SCRIPT</b></center> 
el volumen maximo es:<div id="resultado"></div>

<script>
function calcular(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;		b=parseFloat(b);
	document.getElementById('resultado').innerHTML=(a*a)*b+	' cm<sup>3</sup>';
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
el area es:


<?php
	$a=$_GET["a"];
	$b=$_GET["b"];	
		
	echo (($a*$a)*($b));
	echo " cm<sup>3</sup>"
?>
</div>
</br>
</br>
<center><H2>otros ejercicios</H2></center>
<center>
<a href="edad.php"> <font color="black">edad</a><br/>	
<a href="trapecio.php"> <font color="black">trapecio</a><br/>	
<a<a href="caja.php"> <font color="black">caja</a><br/><a href="fuente.php"> <font color="black">fuente</a><br/>
</center>