
<?php
	if(!isset($_GET['a'])) $_GET['a']=2;
	if(!isset($_GET['b'])) $_GET['b']=1.6;		if(!isset($_GET['c'])) $_GET['c']=3.14;
	
?>

<b><H3>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Si la profundidad de la fuente es de 0.75 m ¿cuántos litros caben? </H3></b>
<td rowspan=2><img src="fuente.jpg" width="550"> </td>

	<td>radio</td>
	<td><input id="a" name="a" placeholder="radio" onkeyup="calcular()" value="<?=$_GET['a']?>"/> cm</td>	</br>

<p> 
	<td>altura</td>
	<td><input id="b" name="b" placeholder="altura" onkeyup="calcular()" value="<?=$_GET['b']?>"/> cm</td></br></p><p> 	<td>pi</td>	<td><input id="c" name="c" placeholder="pi" onkeyup="calcular()" value="<?=$_GET['c']?>"/> cm</td></br></p>


	<td colspan=2><button>calcular</button></center></td>

		
</br>	
</br>
<center><b>JAVA SCRIPT</b></center> 
litros que caben:<div id="resultado"></div>

<script>
function calcular(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;		c=document.getElementById('c').value;
	b=parseFloat(b);
	document.getElementById('resultado').innerHTML=c*(a*a)*b +' litros';
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
litros que caben:


<?php
	$a=$_GET["a"];
	$b=$_GET["b"];		$c=$_GET["c"];
		echo $c*($a*$a)*$b;
	
	echo " litros"
?>
</div>
</br>
</br>
<center><H2>otros ejercicios</H2></center>
<center><a href="edad.php"> <font color="black">edad</a><br/>	<a href="trapecio.php"> <font color="black">trapecio</a><br/>	<a href="caja.php"> <font color="black">caja</a><br/><a href="fuente.php"> <font color="black">fuente</a><br/></center>