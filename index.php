<?php
	$input = '';
	$output = '';
	if (isset($_POST['postback']) and $_POST['postback'] == 1) {
		$input = $_POST['text'];
		$output = password_hash($input, PASSWORD_BCRYPT);
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Salted Hash Generation Demo</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>PHP Salted Hash Generation Demo <small><a href="validation.php">Go&nbsp;to&nbsp;validation</a></small></h1>
            </div>
			<form method="post" action="index.php">
				<input type="hidden" name="postback" value="1" />
				<input class="form-control" type="text" name="text" placeholder="Enter Text" value="<?= $input ?>" />
				<input class="btn btn-default" type="submit" value="Submit"  />
			</form>
			<hr />
			<textarea class="form-control" rows="8" placeholder="Result"><?= $output ?></textarea>
		</div>
	</body>
</html>