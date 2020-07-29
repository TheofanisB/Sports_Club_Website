<center>

    <?php
    include ("connect.php");
    ?>

   

    <?php
    // $sql = "select  Title,
                    Description
            from news";

    $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
    ?>
    <br>
    <table class="view">
        <tr>
            <th>Title</th>
            <th>Description</th>
           
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
                <td><?php echo $row['Title']; ?></td>
                <td><?php echo $row['Description']; ?></td>
               
            </tr>
            <?php
        }
        ?>	
    </table>
</center>