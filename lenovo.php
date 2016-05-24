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
                        <li class="first"><a href="lenovo.php">Lenovo</a></li>
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
        	<h1> Lenovo </h1>        	
            <div class="product_box">
	            <h3>Lenovo IdeaPad 100-14 (80MH001XUA) Суперціна!</h3>
            	<a href="productdetail5.php"><img src="images/product1/05.jpg" alt="noyt 5" /></a>
                <p>Акція! Суперціна на доступні 14-дюймові ноутбуки Lenovo + бездротова мишка в подарунок</p>
            <p class="product_price"> 6199 грн.</p>
                <a href="Lenovo IdeaPad 100-14 (80MH001XUA).php" class="addtocart"></a>
                <a href="productdetail5.php" class="detail"></a>
            </div>        	           	      	
            <div class="product_box no_margin_right">
            	 <h3>Lenovo IdeaPad 100-15 (i3-5005/4/1000/GF920)</h3>
            	<a href="productdetail9.php"><img src="images/product1/09.jpg" alt="noyt 9" /></a>
               <p>Стара ціна: <strike>11599 грн.</strike></p>
              <p class="product_price">9999 грн.</p>
                <a href="Lenovo IdeaPad 100 15.php" class="addtocart"></a>
                <a href="productdetail9.php" class="detail"></a>
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