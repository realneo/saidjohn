<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>

<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->

<div id='intro'>
    <table>
        <tr>
            <th>Events</th>
        </tr>
        <tr>
            <td>
                <table>
                    
                    <?php
                       $event_id = $_GET['id'];
                       $q = mysql_query("SELECT * FROM `events` WHERE `id` = '$event_id'");
                       while($row = mysql_fetch_array($q)){
                           $name = $row['name'];
                           $venue = $row['venue'];
                           $date = $row['date'];
                           $description = $row['description'];
                           $image = $row['image'];
                           echo"
                                <tr><td>{$date}</td></tr>
                                <tr><td style= 'font-size:23px;'>{$name}</td></tr>
                                <tr><td><img src='images/events/{$image}' alt='{$name}' width='650px'/></td></tr>
                                <tr><td><i>{$venue}</i></td></tr>
                                <tr><td>{$description}</td></tr>
                           ";
                       }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div><!-- intro -->

<?php include('includes/footer.php'); ?>