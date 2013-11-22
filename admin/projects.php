<?php include('includes/header.php'); ?>
<?php include('includes/add_project_process.php'); ?>
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
                <a class="current">Add an Project</a>
            </article>
        </div>
    </section><!-- end of secondary bar -->
    <?php include('includes/sidebar.php'); ?>
    <section id="main" class="column">	
        <?php
        if($errors)
        {
            echo $errors;
        }
        else
        {
            echo $info;
        }
        ?>
        <div class="clear"></div>
        <form name="add_project_form" method="post" action="" enctype="multipart/form-data">
        <article class="module width_full">
            <header><h3>Add New Project</h3></header>
            <div class="module_content">
            <fieldset>
                <label>Title</label>
                <input type="text" name ="name" value="<?php echo $_POST['name'];?>" />
            </fieldset>
            <fieldset>
                <label>Brief</label>
                <textarea name ="brief"><?php echo $_POST['brief'];?></textarea>
            </fieldset>  
            <fieldset>
                <label>Description</label>
                <textarea name ="description" class='textarea'><?php echo $_POST['description'];?></textarea>
            </fieldset>
            <fieldset>
                <label>Image</label>
                <input type="file" name ="image" />
            </fieldset>   
            <div class="clear"></div>
            </div>
            <footer>
                <div class="submit_link">
                    <input type="submit" value="Add New Project" class="alt_btn">
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