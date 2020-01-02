<html>
<head>
</head>
<body>
<?php
        $pdo = new PDO('mysql:host=localhost;dbname=huge;charset=utf8', 'root', 'lbs2019');

        $name = $_GET["name"];
        $email = $_GET["email"];
        $datum = $_GET["datum"];
        $nummer = $_GET["nummer"];
        $personen_anzahl = $_GET["personen_anzahl"];

        mysqli_select_db($pdo, "huge");
        mysqli_query($pdo, "INSERT INTO `tablereservation` (`name`, `email`, `nummer`, `datum`, `personen_anzahl`) VALUES ('dada', 'hello@hello.at', '564545', '2020-01-02', '3')		");
    ?>
</body>
</html>



