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
                <a class="current">View Biography</a>
            </article>
        </div>
    </section><!-- end of secondary bar -->
    <?php include('includes/sidebar.php'); ?>
    <section id="main" class="column">		
        <div class="clear"></div>
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Manage Biography</h3>
                <ul class="tabs">
                    <li><a href="#tab1">Biography</a></li>
		</ul>
            </header>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <table class="tablesorter" cellspacing="0"> 
			<thead> 
                            <tr> 
                            <th>No.</th> 
                            <th>Content</th> 
                            <th>Actions</th> 
                            </tr> 
			</thead> 
			<tbody> 
                            <?php
                                $q = mysql_query("SELECT * FROM `biography` ORDER BY `id` ASC");
                                while($row = mysql_fetch_array($q)){
                                    $content = substr($row['content'], 0, 20);
                                    echo"
                                        <tr>
                                            <td>{$row['id']}</td>
                                            <td>{$content}</td>
                                             <td>
                                                <a href='edit_biography.php?id={$row['id']}' class='edit'><input type='image'src='images/icn_edit_article.png' title='Edit'></a>
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