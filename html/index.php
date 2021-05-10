<?php
    // вся процедура работает на сессиях. Именно в ней хранятся    данные пользователя, пока он находится на сайте. Очень важно запустить их в    самом начале странички!!!
	session_start();          
	include ("bd.php");// файл bd.php должен быть в той же папке, что и    все остальные, если это не так, то просто измените путь           
	if    (!empty($_SESSION['login']) and !empty($_SESSION['password']))
				{
				//если существует логин и пароль в сессиях, то проверяем их и    извлекаем аватар
	
				$login    = $_SESSION['login'];
				$password    = $_SESSION['password'];
				$result    = mysqli_query($link, "SELECT id,avatar FROM data_users WHERE login='$login' AND    password='$password'",$db); 
				$myrow    = mysqli_fetch_array($result);
	
				//извлекаем нужные данные о пользователе
				}
?>
<html>
	<header>
		<link href="camagru.css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Главная страница</title>
		</header>
		<body>
	<?php
            if    (!isset($myrow['avatar']) or $myrow['avatar']=='') {

            //проверяем, не извлечены ли данные пользователя из базы. Если    нет, то он не вошел, либо пароль в сессии неверный. Выводим окно для входа.    Но мы не будем его выводить для вошедших, им оно уже не нужно.
        ?>
		<form action="testreg.php" method="post">
			<div class = "login">
				<div class = "background"> </div>
				<div class = "background"></div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "block-login">
					<div class = "box-header"><h1>Camagru</h1></div>
					
					<div class = "box-login">
						<p>Login</p>
						<input name="login" type="text" size="15" maxlength="15" class= "field">
					          
         
						<?
						if (isset($_COOKIE['login'])) //есть    ли переменная с логином в COOKIE. Должна быть,    если пользователь при предыдущем входе нажал на чекбокс "Запомнить    меня" 
						{
						//если да, то вставляем в форму ее значение. При этом    пользователю отображается, что его логин уже вписан в нужную графу
						echo    ' value="'.$_COOKIE['login'].'">';
						}          
						?>
					</div>
					<div class = "box-password">
						
						<p>Password</p>
						<input name="password" type="password" size="15" maxlength="15" class= "field" <? if (isset($_COOKIE['password']))?>>
						<!-- //есть    ли переменная с паролем в COOKIE. Должна быть,    если пользователь при предыдущем входе нажал на чекбокс "Запомнить    меня"  -->
					<?	{
						//если да, то вставляем в форму ее значение. При этом пользователю    отображается, что его пароль уже вписан в нужную графу
						echo    ' value="'.$_COOKIE['password'].'">';
						}
?>
					</div>
					<div class = "button-panel"> 
					<div class ="button-off"><a href="reg.php" > Регистрация</a></div>
					<input type="submit" name="submit" value="Войти" class = "button">Вход</div>
					</div>
					<div class = "box-forgot">Забыли пароль?</div> 
				</div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "background"></div>
			</div>
		<?	}
			else 
            {
            //при удачном входе пользователю выдается все, что расположено    ниже между звездочками.
            //************************************************************************************          
           ?>
 

<!-- Между оператором     "print <<<HERE" выводится html код с нужными    переменными из php -->
            Вы    вошли на сайт, как $_SESSION[login] (<a    href='exit.php'>выход</a>)<br>
            <!-- выше ссылка на выход из аккаунта -->          
<a    href='http://tvpavlovsk.sk6.ru/'>Эта    ссылка доступна только зарегистрированным пользователям</a><br>

            Ваш    аватар:<br>
            <img    alt='$_SESSION[login]' src='$myrow[avatar]'> 
            <!-- Выше отображается аватар. Его адрес содержит    переменная $myrow[avatar] -->          
<!-- Именно здесь можно добавлять формы для отправки    комментариев и прочего... -->          
        
           
//************************************************************************************
  <?          //при удачном входе пользователю выдается все, что расположено    ВЫШЕ между звездочками.
            }          
?>
		</body>
		
		<?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login'];
    }
    ?>
	
</html>