<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                showField("Navn", "text", "name");
            } else if (isset($_POST["name"]) && !isset($_POST["email"]) && !isset($_POST["age"])) {
                showField("Navn", "hidden", "name", $_POST["name"]);
                showField("E-post", "text", "email");
            } else if (isset($_POST["name"]) && isset($_POST["email"]) && !isset($_POST["age"])) {
                showField("Navn", "hidden", "name", $_POST["name"]);
                showField("E-post", "hidden", "email", $_POST["email"]);
                showField("Alder", "number", "age");
            } else {
                echo "Registrert " . $_POST["name"] . " - " .  $_POST["email"] . " - " .  $_POST["age"];
                return;
            }
            echo "  <input type=\"submit\" />";
            
            function showField($label, $type, $name, $value = "")
            {
                if ($type != "hidden") {
                    echo "<br/>$label:<br/>";
                }
                echo "<input type=\"$type\" name=\"$name\" value=\"$value\"/>";
            }
        ?>
      
    </form>
</body>

</html>
