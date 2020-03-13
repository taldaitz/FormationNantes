<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
    <script src="js/script.js"></script>
</head>
<body>

    <form action="result.php" method="POST">
        <input name="chiffre" />
        /
        <input name="diviseur" onblur="checkDiviseur(this);"/>
        <br/>
        <br/>

        <input type="submit" value="Diviser"/>
    </form>
    
</body>
</html>