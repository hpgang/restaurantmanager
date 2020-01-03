<html>
<head>
</head>
<body>
<?php
        //$pdo = new PDO('mysql:host=localhost;dbname=huge;charset=utf8', 'root', 'lbs2019');
        //$pdo = mysqli_connect(localhost,root,lbs2019);
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $telefonnummer = $_POST["telefonnummer"];
        $datum = $_POST["datum"];
        $personen_anzahl = $_POST["personen_anzahl"];

        mysqli_select_db($pdo, "huge");
        mysqli_query($pdo, "INSERT INTO `tablereservation` (`name`, `email`, `telefonnummer`, `datum`, `personen_anzahl`) VALUES ('$name', '$email', '$telefonnummer', '$datum', '$personen_anzahl')");
    ?>
</body>
</html>



