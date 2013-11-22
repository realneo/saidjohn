<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>
<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->
<div id='intro'>
    <table>
        <tr>
            <th>Introduction</th>
        </tr>
        <tr>
            <td>
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src='images/slides/j1.jpg' alt='' />
                        </li>
                        <li>
                            <img src='images/slides/j2.jpg' alt='' />
                        </li>
                        <li>
                            <img src='images/slides/j3.jpg' alt='' />
                        </li>
                        <li>
                            <img src='images/slides/j4.jpg' alt='' />
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td width="410px">
                <!-- Introduction Message -->
                <?php
                    $q = mysql_query("SELECT * FROM `intro`");
                    while($row = mysql_fetch_array($q)){
                        echo $row['intro'];
                    }
                ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->
<?php include('includes/footer.php'); ?>