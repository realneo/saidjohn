<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>
<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->
<div id='intro'>
    <table>
        <tr>
            <th>Donate</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Donate Message -->
                <?php
                    $q = mysql_query("SELECT * FROM `donate`");
                    while($row = mysql_fetch_array($q)){
                        echo $row['donate'];
                    }
                ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->
<?php include('includes/footer.php'); ?>