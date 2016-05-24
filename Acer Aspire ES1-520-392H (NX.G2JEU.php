<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nout Park</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', 
	contentsource: "markup" 
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="index.php">Онлайн-магазин ноутбуків</a></h1></div>
        <div id="header_right">
        	<p>
	        <a href="#">Мій акаунт</a> | <a href="#">Мій лист побажань</a> | <a href="vhod.php">Вхід</a>| <a href="registration.php">Реєстрація</a></p>
		</div>
        <div class="cleaner"></div>
    </div> 
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Домашня сторінка</a></li>
                <li><a href="products.php">Товари</a>
                    <ul>
                        <li><a href="lenovo.php">Lenovo</a></li>
                        <li><a href="asus.php">Asus</a></li>
                        <li><a href="acer.php">Acer</a></li>
						<li><a href="dell.php">Dell</a></li>
						<li><a href="lg.php">LG</a></li>
                        <li><a href="samsung.php">Samsung</a></li>
                    </ul>
                </li>
                <li><a href="about.php">Про нас</a>
                </li>
                <li><a href="contact.php">Зв'язатися з нами</a></li>
            </ul>
            <br style="clear: left" />
        </div> 
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> 
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Категорії</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li><a href="lenovo.php">Lenovo</a></li>
                        <li><a href="asus.php">Asus</a></li>
                        <li><a href="acer.php">Acer</a></li>
						<li><a href="dell.php">Dell</a></li>
						<li><a href="lg.php">LG</a></li>
                        <li><a href="samsung.php">Samsung</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
		<h1 align="center">Замовлення</h1>
		<h2 align="center">Acer Aspire ES1-520-392H (NX.G2JEU.002) Суперціна!</h2>
			<div class="content_half float_l">
				<a  rel="lightbox[portfolio]" href="images/product1/032.jpg"><img src="images/product1/032.jpg" alt="image" /></a>
            </div>
        <div id="content" class="float_r">
			<p style="line-height:200%"><FONT size="4" color=black face="times new roman">Колір:</p>
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
				<li>
					<input type="radio" name="color" value="gray" id="laptop-color-gray" />
					<label for="laptop-color-gray">Сірий</label>
				</li>
				</ul></font>
		<div>
			<label for="laptop-chohol"><FONT size="4" color=black face="times new roman">Чохол</label></font>
			<input type="checkbox" id="laptop-chohol">
		</div>
	<label for="laptop-number"><FONT size="4" color=black face="times new roman">Кількість</label></font>
	<input type="number" value="1" min="1" max="100" id="laptop-number"></font> <br>
	<div>
		<p style="line-height:500%"><FONT size="6" color=Purple face="gabriola">Персональна інформація про покупця</p></Font>
		<FONT size="3" color=Purple face="times new roman"><table width="50%" cellspacing="0" cellpadding="5">
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
		</table>
	</div></FONT>
	<font size="5" color="#B22222" face="gabriola"><div id="result"></div>
	<button onclick="btnClick();">Замовити</button></font>
	<script type="text/javascript">
		function btnClick(){
			//отримуємо всі введені значення (без перевірки на їх заповнення)
			color = document.getElementById('laptop-color-black').checked ? 'black' : (document.getElementById('laptop-color-red').checked ? 'red' : 'blue')
			chohol = document.getElementById('laptop-chohol').checked
			number = document.getElementById('laptop-number').value
			first_name = document.getElementById('user-first-name').value
			last_name = document.getElementById('user-last-name').value
			father_name = document.getElementById('user-father-name').value
			user_address = document.getElementById('user-address').value
			delivery_type = document.getElementById('delivery-type').value
			//початкова повна сума
			total = 6888
			// в залежності від кольору, націнка на товар буває різна
			switch(color){
				case 'black': total += 0; break;
				case 'red': total += 150; break;
				case 'blue': total += 200; break;
				case 'gray': total += 250; break;
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
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    <font size="3" ><p><a href="products.php">Продовжити покупки</a></p></font>
                    	
                    </div>
			</div>
        <div class="cleaner"></div>
    </div> 
    
    <div id="templatemo_footer">
    	<p><a href="#">Домашня сторінка</a> | <a href="#">Товари</a> | <a href="#">Про нас</a> |  <a href="#">Зв'язатися з нами</a>
		</p>

		Corporation © 2016 <a href="#">ZAS and partners</a> 
    	
    </div> 
    
</div> 
</div> 

</body>
</html>