<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/login.css">

	<link rel="shortcut icon" href="<?= base_url() ?>/assets/img/icon_login.png" type="image/x-icon">

	<title><?= $title ?></title>
</head>

<body>

	<div class="container">
		<h1 class="display-4 text-center mb-5"><?= $titlePage ?></h1>
		<div class="row justify-content-center">
			<div class="col-md-6 ">
				<div class="card ">
					<div class="card-body">
						<h4 class="text-center mb-4">Login</h4>
						<form>
							<div class="form-group">
								<label for="username">Usuário</label>
								<input type="text" class="form-control" id="username" placeholder="Digite seu usuário">
							</div>
							<div class="form-group">
								<label for="password">Senha</label>
								<input type="password" class="form-control" id="password" placeholder="Digite sua senha">
							</div>
							<div class="text-center my-3">
								<a href="#">Esqueci minha senha</a>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Acessar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
