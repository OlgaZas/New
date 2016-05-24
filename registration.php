<?php
	header('Content-Type: text/html; charset=utf-8'); 
	$connect = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('auto');
	
	if (isset ($_POST['submit']))
	{
		$name = mysql_escape_string($_POST['name']);
		$surname = mysql_escape_string($_POST['surname']);
		$middlename = mysql_escape_string($_POST['middlename']);
		$login = mysql_escape_string($_POST['login']);
		$country = mysql_escape_string($_POST['country']);
		$city = mysql_escape_string($_POST['city']);
		$email = mysql_escape_string($_POST['email']);
		$phone = mysql_escape_string($_POST['phone']);
		$password = mysql_escape_string($_POST['password']);
		$r_password = mysql_escape_string($_POST['r_password']);
		if ($password == $r_password)
		{
			$password = md5($password);
			$query = mysql_query("INSERT INTO users VALUES ('','$name','$surname','$middlename','$login','$country','$city','$email','$phone','$password')");
			echo "Ви успішно зареєстровані!";
		}
		else 
		{
			die('Паролі не співпадають');
		}
	}
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
                <li><a href="products.php" class="selected">Товари</a>
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
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Поточний курс валют </h3>   
                <div class="content"> 
                	<div class="bs_box">
                        <h4><a href="#">КУРС ДОЛАРА США ДО ГРИВНІ</a></h4>
                        <p class="price">26,22</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <h4><a href="#">КУРС ЄВРО ДО ГРИВНІ</a></h4>
                        <p class="price">29,20</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
			
        </div>
    <div id="content" class="float_r">
		   <h1>Реєстрація</h1>
    <form method="POST" action="registration.php">
    <font color=black><table width="50%" cellspacing="0" cellpadding="5">
    <tr> 
     <td align="right" width="100">Ім'я</td>
     <td><input type="text" name="name" placeholder="Введіть ім'я" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Прізвище</td>
     <td><input type="text" name="surname" placeholder="Введіть прізвище" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">По-батькові</td>
     <td><input type="text" name="middlename" placeholder="Введіть по-батькові" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Логін</td>
     <td><input type="text" name="login" placeholder="Введіть логін" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Країна</td>
     <td><input type="text" name="country" placeholder="Введіть країну" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Місто</td>
     <td><input type="text" name="city" placeholder="Введіть місто" maxlength="50" size="20"></td>
    </tr>
    <tr> 
     <td align="right">E-mail</td>
     <td><input type="text" name="email" placeholder="Введіть email" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Телефон</td>
     <td><input type="text" name="phone" placeholder="зразок: 0972535451" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Пароль</td>
     <td><input type="password" name="password" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Повторіть пароль</td>
     <td><input type="password" name="r_password" maxlength="50" size="20"></td>
    </tr>
   </table>
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
    </div></font>
    <div>
    <input type="submit" name="submit" value="Зареєструватися" />
    </div>	
  </form>
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