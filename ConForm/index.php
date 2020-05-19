<?php


$missing = array();
$errors = array();
$required = array();
$expected = array();

if (isset($_POST['send'])) {

    $required = array('name', 'email', 'comment');
    $expected = array('name', 'email', 'comment');

    require "process_mail.php";

}


?>

<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"
	      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="form_style.css">
	<title>Form</title>
</head>
<body>

<form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']) ?>">

	<p style="text-align: center">
		<label for="Fname"> Name : <br>
            <?php if ($missing and in_array('name', $missing)) : ?>
				<span class="alert-warning"> Please provide a name!</span> <br>
            <?php endif; ?>
			<input type="text" name="name" id="Fname"
                <?php
                if ($missing or $errors) {
                    echo 'value="' . htmlentities($name) . '"';
                }
                ?>>
		</label>
	</p>
	<p style="text-align: center">
		<label for="Email"> Email : <br>
            <?php if ($missing and in_array('email', $missing)) : ?>
				<span class="alert-warning"> Please provide an email adress! </span><br>
            <?php endif; ?>
			<input type="email" name="email" id="Email"
                <?php
                if ($missing or $errors) {
                    echo 'value="' .htmlentities($email). '"';
                }
                ?>>
		</label>
	</p>
	<p style="text-align: center">
		<label for="Comment"> Comment : <br>
            <?php if ($missing and in_array('comment', $missing)) : ?>
				<span class="alert-warning"> Please add comment! </span><br>
            <?php endif ?>
			<textarea name="comment" id="Comment">
				<?php if ($missing or $errors)
					echo htmlentities($comment);
                ?>
			</textarea>
		</label>
	</p>
	<p style="text-align: center">
		<label for="Send"> Send :
			<input type="submit" name="send" id="Send">
		</label>
	</p>

</form>


</body>
</html>
