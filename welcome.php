<?php include "nav.php"; 

$name = $email = $place = "";

$sql = "SELECT * FROM userLogin";
$res = mysqli_query($conn, $sql);

    if ($res) {
?>
<html>
    <head>      
    </head>
    <body>
    <div class="page-lg">
    <div class="container">
    <h1>DATA TABLE</h1>
                <table class="table">
                        <tr style= "background-color: #c9669e;">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Place</th>
                        </tr>
                        <tbody style="background-color:#e396d0;">
                        <tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                            $name = $row["Username"];
                            $email = $row["EmailID"];
                            $place = $row["Place"];
                            ?>
                            <td><?php echo $name ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $place ?></td>
                        </tr>
                        <?php
                        }
                        mysqli_free_result($res);

                    mysqli_close($conn);
    }
    ?>  

</table>
</div>
    </body>
</html>