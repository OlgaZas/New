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
        	<h1> Asus </h1>             	
            <div class="product_box">
            	<h3>Asus X540SA (X540SA-XX012D) Chocolate Black</h3>
            	<a href="productdetail4.php"><img src="images/product1/04.jpg" alt="noyt 4" /></a>
                <p>Суперціна!!!</p>
              <p class="product_price">7350 грн.</p>
                <a href="Asus X540SA (X540SA-XX012D) Chocolate Black.php" class="addtocart"></a>
                <a href="productdetail4.php" class="detail"></a>
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