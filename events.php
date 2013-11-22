<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>
<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->
<div id='intro'>
    <table>
        <tr>
            <th>Events</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Events Message -->
                        <?php
                            $q = mysql_query("SELECT * FROM `events` ORDER BY `date` DESC");
                            while($row = mysql_fetch_array($q)){
                                $row['date'] = date('d M Y', strtotime($row['date']));
                                if( $row['image'] )
                                {
                                    $image = 'images/events/'.$row['image'];
                                }
                                else
                                {
                                    $image = 'images/noevent.png';
                                }
                                echo "
                                    <div class='event'>
                                        <table>
                                            <tr>
                                                <td class='image'><a href='event.php?id={$id}'><img src='$image' alt='event' width='195px'/></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href='event.php?id={$id}' class='purple'>{$row['name']}</a></td>
                                             </tr>
                                             <tr>
                                                <td>{$row['venue']}</td>
                                            </tr>
                                            <tr>
                                                 <td class='date'>{$row['date']}</td>
                                            </tr>
                                        </table>
                                    </div>
                                   
                                    ";
                            }
                        ?> 
            </td>
        </tr>
    </table>
<?php include('includes/footer.php'); ?>