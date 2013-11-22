<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>
<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->
<div id='intro'>
    <table>
        <tr>
            <th>Projects</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Projects Message -->
                <?php
                    $q = mysql_query("SELECT * FROM `projects` ORDER BY `id` DESC");
                    while($row = mysql_fetch_array($q)){
                        $id = $row['id'];
                        if( $row['image'] )
                        {
                            $image = 'images/projects/'.$row['image'];
                        }
                        else
                        {
                            $image = 'images/noevent.png';
                        }
                        echo "
                            <div class='event'>
                                <table>
                                    <tr>
                                        <td><a href='project.php?id={$id}'><img src='$image' alt='event' width='195px'/></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href='project.php?id={$id}' class='purple'>{$row['name']}</a></td>
                                     </tr>
                                     <tr>
                                        <td>{$row['brief']}</td>
                                    </tr>
                                </table>
                            </div>
                            ";
                    }
                ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->
<?php include('includes/footer.php'); ?>