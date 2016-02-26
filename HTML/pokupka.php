<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
	  <title>Оформлення замовлення</title>
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
      <h1>Оформлення замовлення</h1>
	  <form action="index.html" method="get">
	    <div>
		   <label for="form_fname">Ім'я:</label>
	       <input type="text" id="form_fname" name="Ім'я:" placeholder="Введіть ім'я"/>
     	</div>
		<div>
		   <label for="form_sname">Прізвище:</label>
		   <input type="text" id="form_sname" name="Прізвище:"placeholder="Введіть прізвище"/>
		</div>
		<div>
		   <label for="form_surname">По-батькові:</label>
		   <input type="text" id="form_ssname" name="По-батькові:"placeholder="Введіть по-батькові"/>
		</div>
		<div>
		   <label for="form_country">Країна:</label>
		   <input type="text" id="form_country" name="Країна:"placeholder="Оберіть країну"/>
		</div>
		<div>
		   <label for="form_city">Місто:</label>
		   <input type="text" id="form_city" name="Місто:"placeholder="Введіть місто"/>
		</div>
		<div>
		   <label for="form_email">Email:</label>
		   <input type="email" id="form_email" name="Email:"placeholder="Введіть email"/>
		</div>
		<div>
		   <label for="form_phone">Телефон:</label>
		   <input type="text" id="form_phone" name="Телефон:"placeholder="Введіть телефон"/>
		</div>
		<div>
		   <label for="form_virobnuk">Виробник:</label>
		   <input type="text" id="form_virobnuk" name="Виробник:"placeholder="Оберіть виробника"/>
		</div>
		<div>
		   <label for="form_model">Модель:</label>
		   <input type="text" id="form_model" name="Модель:"placeholder="Оберіть модель"/>
		</div>
		<form name="adder">
        <div> 
        <label align="right" width="30">Ціна товару:</label>
        <input type="text" name="inputA" id="inputA" value="0" size="4" />
        </div> 
		<div>
	    <label align="right" width="30">Кількість одиниць товару</label>
        <input type="text" name="inputB" id="inputB" value="0" size="4" />
        </div>
	    <div> 
        <label align="right" width="30">Вартість доставки:</label>
        <input type="text" name="inputС" id="inputС" value="0" size="4" />
        </div>
		<div>
		   <label for="message">Отримувати повідомлення з сайту про нові акції:</label>
		    <input type="checkbox" name="lan1" value="yes"
			                                   checked>Так
			<input type="checkbox" name="lan2" value="no"
			                                   checked>Ні
        </div>		
		<div>
		   <label for="delivery">Пріоритетний тип доставки:</label>
		    <input type="radio" name="mail" value="courier service"
			                                   >Кур'єрська служба 
			<input type="radio" name="mail" value="postage"
			                                   >Поштова пересилка
        </div>	
	    <div> 
        <label align="right" width="30"><input type="button" value="Сума до сплати" onclick="addIt()"></label>
        <input type="text" name="output" id="output" size="6" />
        </div>
		 <div> 
        <label align="right" width="30"><input type="button" value="Підтвердити замовлення" onclick="addIt()"></label>
        <input type="text" name="output" id="output" size="6" />
        </div>
        </form>
		</body>
</html>
