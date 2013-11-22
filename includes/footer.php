        </div><!-- container -->
        <div id='footer'>
            <div id='footer_content'>
                <div id='footer_logo'><img src='images/logo.png' alt='logo' /></div><!-- footer_logo -->
                <div id='footer_links'>
                    <table width='650px'>
                        <tr>
                            <th><a href='#'>About Us</a></th>
                            <th><a href='#'>Donate</a></th>
                            <th><a href='#'>Projects</a></th>
                            <th><a href='#'>Events</a></th>
                        </tr>
                        <tr>
                            <td><a href='#biography'>Sheikh Said John</a></td>
                            <td><a href='donate.php'>Bank</a></td>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 0 , 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='project.php?id={$id}'>{$name}</a>";
									}
								?>
							</a>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `events` ORDER BY `id` DESC LIMIT 0 , 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='event.php?id={$id}'>{$name}</a>";
									}
								?>
							</td>
                        </tr>
                        <tr>
                            <td><a href='about_us.php'>Daawa Trust Fund</a></td>
                            <td><a href='donate.php>'>Mobile Transfer</a></td>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 2 , 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='project.php?id={$id}'>{$name}</a>";
									}
								?>
							</td>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `events` ORDER BY `id` DESC LIMIT 2 , 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='event.php?id={$id}'>{$name}</a>";
									}
								?>
							</td>
                        </tr>
                        <tr>
                            <td><a href='contact_us.php'>Contact us</a></td>
                            <td><a href='donate.php'>Paypal</a></td>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 3 , 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='project.php?id={$id}'>{$name}</a>";
									}
								?>
							</td>
                            <td>
								<?php 
									$q = mysql_query("SELECT * FROM `events` ORDER BY `id` DESC LIMIT 3, 1");
									while($row = mysql_fetch_array($q)){
										$name = $row['name'];
										$id = $row['id'];
										echo "<a href='events.php?id={$id}'>{$name}</a>";
									}
								?>
							</td>
                        </tr>
                    </table>
                </div><!-- footer_links -->
                <div id='footer_info'>
                     SHEIKH SAID JOHN DA'AWAH TRUST FUND <br />
                    <a href='join_us.php'>Volunteer</a> | <a href='donate.php'>Donate Now</a> | <a href='contact_us.php'>Contact Us</a>
                </div><!-- footer_info -->
                <div id='footer_social'></div><!-- footer_social -->
            </div><!-- footer_content -->
        </div><!-- footer -->        
    </body>
</html>