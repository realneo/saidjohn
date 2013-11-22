<div id='left_pane'>
                <div id='news_section'>
                <table width='300px'>
                    <tr>
                        <th><span class='white'>News </span><span class='purple'>Section</span></th>
                    </tr>
                    <?php 
                        $q = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 0 , 4");
                        while($row = mysql_fetch_array($q)){
                            $row['date'] = date('jS M Y');
                            $date = $row['date'];
                            $brief = $row['brief'];
							$id = $row['id'];
                            echo "<tr><td><span class='purple'>{$date}</span><span class='dark_grey'> - <a href='news.php?id={$id}' style='color:#6d6767;'>{$brief}</a></span></td></tr>";
                        }
                    ?>
                </table>
                </div><!-- news_section -->
                <div id='upcoming_events'>
                    <table width='300px'>
                        <tr>
                            <th><span class='white'>Upcoming </span><span class='purple'>Events</span></th>
                        <?php 
                            $q = mysql_query("SELECT * FROM `events` ORDER BY `date` DESC LIMIT 0 , 4");
                            while($row = mysql_fetch_array($q)){
                                $row['date'] = date('jS M Y');
                                $date = $row['date'];
                                $name = $row['name'];
								$id = $row['id'];
                                echo "<tr><td><span class='purple'>{$date}</span><span class='dark_grey'> - <a href='event.php?id={$id}' style='color:#6d6767;'>{$name}</a></span></td></tr>";
                            }
                        ?>
                    </table>
                </div><!-- upcoming_events -->
            </div><!-- left_pane -->