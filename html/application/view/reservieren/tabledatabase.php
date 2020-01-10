<html>
<head>
</head>
<body>
<?php
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        $tischnummer = $_POST["tischnummer"];

        mysqli_select_db($pdo, "huge");
        mysqli_query($pdo, "INSERT INTO `tablereservation` (`tischnummer`) VALUES ('$tischnummer')");
    ?>
<?php
// PHP permanent URL redirection
header("Location: /html/reservieren/abschluss/", true, 301);
exit();
?>
</body>
</html>
