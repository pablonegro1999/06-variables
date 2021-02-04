
<?php
	if(!isset($_GET['x'])) $_GET['x']=3;
	if(!isset($_GET['y'])) $_GET['y']=16;	
	
?>

<b><H3>La edad de Sara es el triple que la de su hija. Dentro de 14 años será el doble. ¿Qué edades tienen Sara y su hija? </H3></b>


	<td>sara</td>
	<td><input id="x" name="x" placeholder="sara" onkeyup="calcular()" value="<?=$_GET['x']?>"/> años</td>	</br>

<p> 
	<td>hija</td>
	<td><input id="y" name="y" placeholder="hija" onkeyup="calcular()" value="<?=$_GET['y']?>"/> años</td></br></p>


	<td colspan=2><button>calcular</button></center></td>

		
</br>	
</br>
<center><b>JAVA SCRIPT</b></center> 
la edad es:<div id="resultado"></div>

<script>
function calcular(){
	x=document.getElementById('x').value;
	y=document.getElementById('y').value;		Math.round (3*y);	document.getElementById('resultado1').innerHTML=h+ 'edad sara';	Math.round (3*h);
	document.getElementById('resultado1').innerHTML=resultado 'edad sara';		
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
el area es:


<?php
	$a=$_GET["x"];
	$b=$_GET["y"];	
		
	echo ($x+$y)/2;
	echo " cm<sup>2</sup>"
?>
</div>
</br>
</br>
<center><H2>otros ejercicios</H2></center>
<center>
<a href="edad.php"> <font color="black">edad</a><br/>	<a href="trapecio.php"> <font color="black">trapecio</a><br/>	<a href="caja.php"> <font color="black">caja</a><br/><a href="fuente.php"> <font color="black">fuente</a><br/></center>