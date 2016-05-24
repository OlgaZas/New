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
        	<h1>Зв'язатися з нами</h1>
            <div class="content_half float_l">
			    <h2> <font size="6" color="red" face="gabriola">Зверніть увагу</font></h2>
                <h4>Графік опрацювання електронних звернень:</h4>
                   <h5>Пн.-Пт. з 08:30 до 21:00</h5>
                   <h5>Сб. з 09:00 до 17:00</h5>
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        <label for="author">Ім'я:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="phone">Телефон:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner h10"></div>
        
                        <label for="text">Повідомлення:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="відправити" />
                        
                    </form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h5>Головний офіс</h5>
			м. Черкаси, вул.Шевченко, 297 <br />
						
			Телефон: 010-010-6600<br />
			Email: <a href="mailto:info@yourcompany.com">info@noutpark.com</a><br/>
			
            <div class="cleaner h40"></div>
			
            <h5>Сервісний відділ</h5>
			м. Черкаси, вул. Хрещатик, 83<br />
			
			Телефон: 030-030-0220<br />
			Email: <a href="mailto:contact@yourcompany.com">contact@noutpark.com</a><br/>
			<br />
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