
<html>
	<header>
		<link href="camagru.css" rel="stylesheet">
		<meta charset="UTF-8">
		<body>
			<div class = "login">
				<div class = "background"> </div>
				<div class = "background"></div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "block-login">
					<div class = "box-header"><h1>Camagru</h1></div>

					<form action="save_user.php" method="post" enctype="multipart/form-data">	
					<div class = "box-login">
						<p>Email</p>
						<input  class= "field"></input>
					</div>
					<div class = "box-login">
						<p>Login</p>
						<input name="login" type="text" size="15" maxlength="15" class= "field"></input>
					</div>
					<div class = "box-password">
						
						<p>Password</p>
						<input name="password" type="password" size="15" maxlength="15" class= "field"></input>

					</div>
					<div class="box-password">
              		<label>Выберите аватар. Изображение должно быть формата jpg, gif или png:<br></label> <!-- В переменную fupload отправится    изображение, которое выбрал пользователь --> 
              			<input type="FILE" name="fupload">
					</div>

					<div class = "button-panel"> 
					<input type="submit" name="submit" value="Зарегистрироваться" class ="button"></input>
					<div class = "button-off">Вход</div>
					</div>
				</div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "background"> </div>
				<div class = "background"></div>
			</div>
		</body>
	</header>
</html>