<?php include('includes/header.php'); ?>
<?php include('includes/db_conn.php'); ?>
    <header id="header">
            <hgroup>
                    <h1 class="site_title"><a href="home.php">Website Admin</a></h1>
                    <h2 class="section_title">Dashboard</h2>
                    <div class="btn_view_site"><a href="../index.php">View Site</a></div>
            </hgroup>
    </header> <!-- end of header bar -->
    <section id="secondary_bar">
        <div class="user">
            <p><?php echo $_SESSION['username'];?> <!--(<a href="#">3 Messages</a>)--></p>
            <a class="logout_user" href="includes/logout_process.php" title="Logout">Logout</a>
        </div>
        <div class="breadcrumbs_container">
            <article class="breadcrumbs">
                <a href="home.php">Website Admin</a> 
                <div class="breadcrumb_divider"></div> 
                <a class="current">View Users</a>
            </article>
        </div>
    </section><!-- end of secondary bar -->
    <?php include('includes/sidebar.php'); ?>
    <section id="main" class="column">		
        <?php
            if($_SESSION['message'] == 'delete_user_success'){
                echo "<h4 class='alert_success'>User was successfully deleted</h4>";
            }
            if($_SESSION['message'] == 'failed_user_add'){
                echo "<h4 class='alert_error'>There was an error in deleting this user user</h4>";
            }
        ?>
        <div class="clear"></div>
        <article class="module width_3_quarter">
            <header>
                <h3 class="tabs_involved">Manage Users</h3>
                <ul class="tabs">
                    <li><a href="#tab1">Users</a></li>
		</ul>
            </header>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <table class="tablesorter" cellspacing="0"> 
			<thead> 
                            <tr> 
                            <th>No.</th> 
                            <th>Username</th> 
                            <th>Password</th> 
                            <th>Actions</th> 
                            </tr> 
			</thead> 
			<tbody> 
                            <?php
                                $no = 0;
                                $q  = mysql_query("SELECT * FROM `users`");
                                while($row = mysql_fetch_array($q)){
                                    $no++;
                                    echo"
                                        <tr>
                                            <td>{$no}</td>
                                            <td>{$row['username']}</td>
                                            <td>{$row['password']}</td>
                                             <td><a href='includes/delete_user_process.php?id={$row['id']}'><input type='image'src='images/icn_trash.png' title='Trash'></a></td>
                                        </tr>
                                        ";
                                }
                            ?>
			</tbody> 
                    </table>
                </div><!-- end of #tab2 -->	
            </div><!-- end of .tab_container -->		
        </article><!-- end of content manager article -->
    <div class="spacer"></div>
    </section>
</body>
</html>
<?php $_SESSION['message']=''; ?>