
        <div id='news_section'>
            <table width='300px'>
                <tr>
                    <th><span class='white'>News </span><span class='purple'>Section</span></th>
                </tr>
                <?php 
                    $q = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 0 , 3");
                    while($row = mysql_fetch_array($q)){
                        $row['date'] = date('jS M Y');
                        $date = $row['date'];
                        $brief = $row['brief'];
                        echo "<tr><td><span class='purple'>{$date}</span><span class='dark_grey'> - {$brief}</span></td></tr>";
                    }
                ?>
            </table>
        </div><!-- news_section -->
        <div id='upcoming_events'>
            <table width='300px'>
                <tr>
                    <th><span class='white'>Upcoming </span><span class='purple'>Events</span></th>
                <?php 
                    $q = mysql_query("SELECT * FROM `events` ORDER BY `date` DESC LIMIT 0 , 3");
                    while($row = mysql_fetch_array($q)){
                        $row['date'] = date('jS M Y');
                        $date = $row['date'];
                        $name = $row['name'];
                        echo "<tr><td><span class='purple'>{$date}</span><span class='dark_grey'> - {$name}</span></td></tr>";
                    }
                ?>
            </table>
        </div><!-- upcoming_events -->
   