<?php
session_start();
require_once 'config/config.php';
$token = bin2hex(openssl_random_pseudo_bytes(16));


if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE) {
	header('Location: index.php');
}


if (isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token'])) {

	$series_id = filter_var($_COOKIE['series_id']);
	$remember_token = filter_var($_COOKIE['remember_token']);
	$db = getDbInstance();

	$db->where('series_id', $series_id);
	$row = $db->getOne('admin_accounts');

	if ($db->count >= 1) {

		if (password_verify($remember_token, $row['remember_token'])) {

			$expires = strtotime($row['expires']);

			if (strtotime(date()) > $expires) {

				clearAuthCookie();
				header('Location: login.php');
				exit;
			}

			$_SESSION['user_logged_in'] = TRUE;
			$_SESSION['admin_type'] = $row['admin_type'];
			header('Location: index.php');
			exit;
		} else {
			clearAuthCookie();
			header('Location: login.php');
			exit;
		}
	} else {
		clearAuthCookie();
		header('Location: login.php');
		exit;
	}
}
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-" class="col-md-4 col-md-offset-4">
	<form class="form loginform" method="POST" action="authenticate.php">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Log in AUB</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="control-label">Gebruikersnaam</label>
					<input type="text" name="username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">Wachtwoord</label>
					<input type="password" name="password" class="form-control" required="required">
				</div>
				<div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="1">Onthoud mij
					</label>
				</div>
				<?php if (isset($_SESSION['login_failure'])) : ?>
					<div class="alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php
						echo $_SESSION['login_failure'];
						unset($_SESSION['login_failure']);
						?>
					</div>
				<?php endif; ?>
				<button type="submit" class="btn btn-success loginField">Login</button>
			</div>
		</div>
	</form>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>