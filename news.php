<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>

<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->

<div id='intro'>
    <table>
        <tr>
            <th>News</th>
        </tr>
        <tr>
            <td>
                <table>
                    
                    <?php
                       $news_id = $_GET['id'];
                       $q = mysql_query("SELECT * FROM `news` WHERE `id` = '$news_id'");
                       while($row = mysql_fetch_array($q)){
                           $name = $row['name'];
                           $brief = $row['brief'];
                           $date = $row['date'];
                           $description = $row['description'];
                           echo"
                                <tr><td>{$date}</td></tr>
                                <tr><td style= 'font-size:23px;'>{$name}</td></tr>
                                <tr><td><i>{$brief}</i></td></tr>
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