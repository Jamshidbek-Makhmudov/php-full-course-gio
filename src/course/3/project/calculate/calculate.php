<?php 
$site_path = $_SERVER['DOCUMENT_ROOT'];

?>

<form action="/pdo/src/course/3/project/calculate/calc.inc.php" method="post">
	<p>calculator</p>
	<input type="number" name="num1" value="" placeholder="first number">
	<select name="oper">
		<option value="add">Add</option>
		<option value="sub">Sub</option>
		<option value="div">Div</option>
		<option value="mul">Mul</option>


	</select>
	<input type="number" name="num2" value="" placeholder="second number">
	<button type="submit" name="submit">Calculate</button>

</form>




</body>

</html>