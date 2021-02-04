
<?php
	if(!isset($_GET['a'])) $_GET['a']=20;
	if(!isset($_GET['b'])) $_GET['b']=16;		if(!isset($_GET['c'])) $_GET['c']=10;
	
?>

<b><H3>Calcula el área de un trapecio de 10cm de altura y cuyas bases miden 200mm y 160 mm. </H3></b>
<td rowspan=2><img src="trapecio.jpg" width="550"> </td>

	<td>base Mayor</td>
	<td><input id="a" name="a" placeholder="base M" onkeyup="calcular()" value="<?=$_GET['a']?>"/> cm</td>	</br>

<p> 
	<td>base menor</td>
	<td><input id="b" name="b" placeholder="base m" onkeyup="calcular()" value="<?=$_GET['b']?>"/> cm</td></br></p><p> 	<td>altura</td>	<td><input id="c" name="c" placeholder="altura" onkeyup="calcular()" value="<?=$_GET['c']?>"/> cm</td></br></p>


	<td colspan=2><button>calcular</button></center></td>

		
</br>	
</br>
<center><b>JAVA SCRIPT</b></center> 
el area es:<div id="resultado"></div>

<script>
function calcular(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;		c=document.getElementById('c').value;
	b=parseFloat(b);
	document.getElementById('resultado').innerHTML=c*(1*a+b)/2+ ' cm<sup>2</sup>';
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
el area es:


<?php
	$a=$_GET["a"];
	$b=$_GET["b"];		$c=$_GET["c"];
		
	echo (($a+$b)*($c))/2;
	echo " cm<sup>2</sup>"
?>
</div>
</br>
</br>
<center><H2>otros ejercicios</H2></center>
<center><a href="edad.php"> <font color="black">edad</a><br/>	<a href="trapecio.php"> <font color="black">trapecio</a><br/>	<a href="caja.php"> <font color="black">caja</a><br/><a href="fuente.php"> <font color="black">fuente</a><br/></center>