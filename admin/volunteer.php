<?php include('includes/header.php'); ?>
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
                <a class="current">About Us</a>
            </article>
        </div>
    </section><!-- end of secondary bar -->
    <?php include('includes/sidebar.php'); ?>
    <section id="main" class="column">		
        <?php
            if($_SESSION['message'] == 'sucess_about_add'){
                echo "<h4 class='alert_success'>Successfully added</h4>";
            }
            if($_SESSION['message'] == 'failed_about_add'){
                echo "<h4 class='alert_error'>There was an error in adding your data</h4>";
            }
        ?>
        <div class="clear"></div>
        <form name="add_intro_form" method="post" action="includes/add_volunteer_process.php">
        <article class="module width_full">
            <header><h3>Volunteer</h3></header>
            <div class="module_content">
                <fieldset>
                    <label>Content</label>
                    <textarea rows="12" name="volunteer"  class='textarea'>
                    <?php 
                        $q = mysql_query("SELECT * FROM volunteer WHERE id = 1");
                        while($row = mysql_fetch_array($q)){
                            echo $row['volunteer'];
                        }
                    ?>
                    </textarea>
                </fieldset>
            <div class="clear"></div>
            </div>
            <footer>
                <div class="submit_link">
                    <input type="submit" value="Save" class="alt_btn">
                    <input type="submit" value="Reset">
                </div>
            </footer>
        </form>
		</article><!-- end of post new article -->
		<div class="spacer"></div>
	</section>


</body>

</html>
<?php $_SESSION['message']=''; ?>