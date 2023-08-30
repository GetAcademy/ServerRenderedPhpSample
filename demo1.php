<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Navn:<br/>
        <input type="text" name="name"/><br/>
        E-post:<br/>
        <input type="text" name="email"/><br/>
        Alder:<br/>
        <input type="text" name="age"/><br/>
        <input type="submit"/>
    </form>
    <?php
        var_dump($_POST);
    ?>    
</body>
</html>

