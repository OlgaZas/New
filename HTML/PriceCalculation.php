<html>
<head>
<meta charset="utf-8" />
<title>Підрахунок вартості замовлення</title>
<script type="text/javascript">
function addIt() {
var value1 = Number(document.getElementById("inputA").value);
var value2 = Number(document.getElementById("inputB").value);
var value3 = Number(document.getElementById("inputС").value);
document.getElementById("output").value = (value1 * value2) + value3;
}
</script>
</head>
<body>

 <h1>Кінцева вартість замовлення</h1>
  <form name="adder">
   <table width="30%" cellspacing="0" cellpadding="5">
    <tr> 
     <td align="right" width="30">Ціна товару:</td>
     <td><input type="text" name="inputA" id="inputA" value="0" size="4" /></td>
    </tr>
	<tr> 
     <td align="right" width="30">Кількість одиниць товару</td>
     <td><input type="text" name="inputB" id="inputB" value="0" size="4" /></td>
    </tr>
	<tr> 
     <td align="right" width="30">Вартість доставки:</td>
     <td><input type="text" name="inputС" id="inputС" value="0" size="4" /></td>
    </tr>
	<tr> 
     <td align="right" width="30"><input type="button" value="Всього до сплати" onclick="addIt()"></td>
     <td><input type="text" name="output" id="output" size="6" /></td>
    </tr>

</form>
</body>
</html>
