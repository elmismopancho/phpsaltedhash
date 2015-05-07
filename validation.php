<?php
    $hash = "";
    $text = "";
    $postback = false;
    $validationResult = '';
    $validationMsg = '';
    if (isset($_POST['postback']) and $_POST['postback'] == 1) {
        $postback = true;
        $hash = $_POST['hash'];
        $text = $_POST['text'];

        $result = password_verify($text, $hash);
        if ($result) {
            $validationResult = 'alert-success';
            $validationMsg = 'The text is valid';
        } else {
            $validationResult = 'alert-danger';
            $validationMsg = 'The text is invalid';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Salted Hash Validation Demo</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>PHP Salted Hash Validation Demo <small><a href="index.php">Go&nbsp;to&nbsp;generation</a></small></h1>
            </div>
            <form method="post" action="validation.php">
                <input type="hidden" name="postback" value="1" />
                <input class="form-control" type="text" name="text" placeholder="Enter original text" value="<?= $text ?>" />
                <input class="form-control" type="text" name="hash" placeholder="Enter hash" value="<?= $hash ?>" />
                <input class="btn btn-default" type="submit" value="Submit"  />
            </form>
        <?php if ($postback): ?>
            <hr />
            <div class="alert <?= $validationResult ?>"><?= $validationMsg ?></div>
        <?php endif; ?>
        </div>
    </body>
</html>