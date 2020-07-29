<center>

    <?php
    include ("connect.php");
    ?>

   

    <?php
    $sql = "select  fname,
                    lname,
                    email
            from user";

    $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
    ?>
    <br>
    <table class="view">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['age']; ?></td>
            </tr>
            <?php
        }
        ?>	
    </table>
</center>