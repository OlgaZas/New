<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
	  <title>Реєстраційна форма</title>
 </head>
 <body>
  <h1>Реєстрація</h1>
  <form method="get" action="registration.html">
   <table width="100%" cellspacing="0" cellpadding="5">
    <tr> 
     <td align="right" width="100">Ім'я</td>
     <td><input type="text" name="Ім'я" placeholder="Введіть ім'я" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Прізвище</td>
     <td><input type="text" name="Прізвище" placeholder="Введіть прізвище" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">По-батькові</td>
     <td><input type="text" name="По-батькові" placeholder="Введіть по-батькові" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Країна</td>
     <td><input type="text" name="Країна" placeholder="Оберіть країну" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right" width="100">Місто</td>
     <td><input type="text" name="Місто" placeholder="Введіть місто" maxlength="50" size="20"></td>
    </tr>
    <tr> 
     <td align="right">E-mail</td>
     <td><input type="text" name="email" placeholder="Введіть email" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Телефон</td>
     <td><input type="text" name="телефон" placeholder="Введіть телефон" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Пароль</td>
     <td><input type="text" name="пароль" maxlength="50" size="20"></td>
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
    </div>	
    <div>
		<input type="submit" name="submit" value="Завершити реєстрацію">
    </div>	
  </form>
 </body>
</html>
