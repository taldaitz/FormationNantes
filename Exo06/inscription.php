<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="create_user.php" method="POST">
        <div class="form-group">
            <label for="loginText"> Login : </label>
            <input name="login" type="text" id="loginText" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="passwordText"> Mot de passe : </label>
            <input name="password" type="password" id="passwordText" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="emailText"> Email : </label>
            <input name="email" type="email" id="emailText" class="form-control"/>
        </div>

        <input type="submit" value="Créer"/>

    </form>

</body>

</html>