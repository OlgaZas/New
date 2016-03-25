<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Оформлення замовлення</title>
</head>
<body background="im/primer.jpg"> 
</div><center><h1><FONT COLOR=gold>Оформлення замовлення ноутбука</FONT></h1></center>
	<ul>
  <li>
    <a  href="new 1.html">Головна</a>
  </li>
  <li>
    <a href="registration.html">Реєстрація</a>
  </li>
  <ul>
	<center><img src="im/logo1.png" alt="kartinka"></center>
	<h2><FONT COLOR=NavajoWhite1>Інформація про товар</h2>
	<table width="25%" cellspacing="0" cellpadding="5">
		<tr>
			<td for="laptop-model">Модель ноутбука</td>
			<td>
				<select id="laptop-model">
					<option value="b571" selected="selected">b571</option>
					<option value="b570">b570</option>
					<option value="b580">b580 </option>
				</select>
			</td>
		</tr>
		<tr>
			<td for="laptop-manufacturer">Виробник</td>
			<td>
				<select id="laptop-manufacturer">
					<option value="Asus" selected="selected">Asus</option>
					<option value="Lenovo">Lenovo</option>
					<option value="Acer">Acer</option>
				</select>
			</td>
		</tr>
	</table>
	<label>Колір:</label>
	<ul>
		<li>
			<input type="radio" name="color" value="black" id="laptop-color-black" checked="checked" />
			<label for="laptop-color-black">Чорний</label>
		</li>
		<li>
			<input type="radio" name="color" value="red" id="laptop-color-red" />
			<label for="laptop-color-red">Червоний</label>
		</li>
		<li>
			<input type="radio" name="color" value="blue" id="laptop-color-blue" />
			<label for="laptop-color-blue">Синій</label>
		</li>
	</ul>
	<div>
		<label for="laptop-chohol">Чохол</label>
		<input type="checkbox" id="laptop-chohol">
	</div>
	<label for="laptop-number">Кількість</label>
	<input type="number" value="1" min="1" max="100" id="laptop-number">
	<div></FONT>
		<h2><FONT COLOR=Purple>Персональна інформація про покупця</h2>
		<table width="30%" cellspacing="0" cellpadding="5">
			<tr>
				<td for="user-last-name">Прізвище</td>
				<td> <input type="text" id="user-last-name"></td>
			</tr>
			<tr>
				<td for="user-first-name">Імя</td>
				<td><input type="text" id="user-first-name"></td>
			</tr>
			<tr>
				<td for="user-father-name">По-батькові</td>
				<td><input type="text" id="user-father-name"></td>
			</tr>
			<tr>
				<td for="user-address">Адреса доставки</td>
				<td><input type="text" id="user-address"></td>
			</tr>
			<tr>
				<td for="delivery-type">Тип доставки</td>
				<td>
					<select id="delivery-type">
						<option value="self" selected="selected">Самовивіз</option>
						<option value="novaposhta">Нова пошта</option>
						<option value="ukrposhta">Укрпошта</option>
					</select>
				</td>
			</tr>
		</table></FONT>
	</div>
	<div id="result"></div>
	<button onclick="btnClick();">Замовити</button>
	<ul>
  <li>
    <a  href="new 1.html">Контакти</a>
  </li>
  <li>
    <a href="new 1.html">Про нас</a>
  </li>
  <ul>
	<script type="text/javascript">
		function btnClick(){
			//отримуємо всі введені значення (без перевірки на їх заповнення)
			model = document.getElementById('laptop-model').value
			manufacturer = document.getElementById('laptop-manufacturer').value
			color = document.getElementById('laptop-color-black').checked ? 'black' : (document.getElementById('laptop-color-red').checked ? 'red' : 'blue')
			chohol = document.getElementById('laptop-chohol').checked
			number = document.getElementById('laptop-number').value
			first_name = document.getElementById('user-first-name').value
			last_name = document.getElementById('user-last-name').value
			father_name = document.getElementById('user-father-name').value
			user_address = document.getElementById('user-address').value
			delivery_type = document.getElementById('delivery-type').value
			//початкова повна сума
			total = 0
			//кожна модель ноутбука різних виробників має різну вартість
			//тому для початку визначаємо виробника ..
			switch(manufacturer){
				case 'Asus':
					// .. а потім модель
					switch(model){
						case 'b571': total += 4500; break;
						case 'b570': total += 5000; break;
						case 'b580': total += 5500; break;
					}
					break;
				// і так для кожної моделі кожного виробника
				case 'Lenovo':
					switch(model){
						case 'b571': total += 6000; break;
						case 'b570': total += 6500; break;
						case 'b580': total += 7000; break;
					}
					break;
				case 'Acer':
					switch(model){
						case 'b571': total += 7500; break;
						case 'b570': total += 8000; break;
						case 'b580': total += 8500; break;
					}
					break;
			}
			// в залежності від кольору, націнка на товар буває різна
			switch(color){
				case 'black': total += 100; break;
				case 'red': total += 150; break;
				case 'blue': total += 200; break;
			}
			// якщо треба чохол - додаємо до вартості
			if(chohol){
				total += 250
			}
			// домножаємо на кількість
			total = total * number
			//та додаємо вартість пересилки в залежності від обраного способу
			switch(delivery_type){
				case 'self': total += 0; break;
				case 'novaposhta': total += 50; break;
				case 'ukrposhta': total += 35; break;
			}
			// формуємо повідомлення 
			msg = 'Шановний, ' + first_name + ' ' + father_name + '!<br>Повна вартість Вашого замовлення складає ' + total + ' грн.<br>Дякуємо, що Ви з нами!'
			// та виводимо його в innerHTML (щоб тег BR інтерпретувався як тег, а не як частина тексту)
			document.getElementById('result').innerHTML = msg
		}
	</script>
</body>
</html>
