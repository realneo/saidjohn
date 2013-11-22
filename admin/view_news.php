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
                <a class="current">View News</a>
            </article>
        </div>
    </section><!-- end of secondary bar -->
    <?php include('includes/sidebar.php'); ?>
    <section id="main" class="column">		
        <?php
            if($_SESSION['message'] == 'delete_news_success'){
                echo "<h4 class='alert_success'>Event was successfully deleted</h4>";
            }
            if($_SESSION['message'] == 'failed_news_add'){
                echo "<h4 class='alert_error'>There was an error in deleting this event user</h4>";
            }
        ?>
        <div class="clear"></div>
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Manage News</h3>
                <ul class="tabs">
                    <li><a href="#tab1">News</a></li>
		</ul>
            </header>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <table class="tablesorter" cellspacing="0"> 
			<thead> 
                            <tr> 
                            <th>No.</th> 
                            <th>Date</th> 
                            <th>Name</th> 
                            <th>Actions</th> 
                            </tr> 
			</thead> 
			<tbody> 
                            <?php
                                $no = 0;
                                $q  = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC");
                                while($row = mysql_fetch_array($q)){
                                    $no++;
                                    echo"
                                        <tr>
                                            <td>{$no}</td>
                                            <td>{$row['date']}</td>
                                            <td>{$row['name']}</td>
                                             <td>
                                                <a href='edit_news.php?id={$row['id']}' class='edit'><input type='image'src='images/icn_edit_article.png' title='Edit'></a>
                                                <a href='includes/delete_news_process.php?id={$row['id']}' class='delete'><input type='image'src='images/icn_trash.png' title='Trash'></a>
                                            </td>
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
    <script type="text/javascript">
        $('.delete').click(function(){
            if(confirm('Are you sure you want to delete?') == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        });
    </script>
</body>
</html>
<?php $_SESSION['message']=''; ?>