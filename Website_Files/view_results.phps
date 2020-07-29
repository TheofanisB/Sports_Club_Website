<center>

    <?php
    include ("connect.php");
    ?>

   

    <?php
    $sql = "select  team1,
                    team2,
                    score1,
					score2,
					date
            from game";

    $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
    ?>
    <br>
    <table class="view">
        <tr>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Score 1</th>
			<th>Score 2</th>
			<th>Date</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
                <td><?php echo $row['team1']; ?></td>
                <td><?php echo $row['team2']; ?></td>
                <td><?php echo $row['score1']; ?></td>
				<td><?php echo $row['score2']; ?></td>
				<td><?php echo $row['date']; ?></td>
            </tr>
            <?php
        }
        ?>	
    </table>
</center>