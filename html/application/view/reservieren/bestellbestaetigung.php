<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
        <?php

            $pdo = new mysqli("localhost", "root", "lbs2019", "huge");
            mysql_select_db($pdo, "huge");
            $query = mysql_query($pdo, "select * from tablereservation");
        ?>
        <table class="striped">
            <tr class="header">
                <td>Id</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[ID]."</td>";
                   echo "<td>".$row[Name]."</td>";
                   echo "<td>".$row[Title]."</td>";
                   echo "</tr>";
               }

            ?>
        </table>
    </body>
</html>