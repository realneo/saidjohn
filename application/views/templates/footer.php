
</div><!-- container -->
    <div id='footer'>
        <div id='footer_content'>
            <div id='footer_logo'><img src='<?php echo $base; ?>/assets/images/logo.png' alt='logo' /></div><!-- footer_logo -->
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
				<?php foreach($projects as $project):?>
                                    <a href="#"><?php echo $project->name; ?></a>
                                    <br />
                                <?php endforeach;?>
                            <td>
                                
							</td>
                        </tr>
                        <tr>
                            <td><a href='about_us.php'>Daawa Trust Fund</a></td>
                            <td><a href='donate.php>'>Mobile Transfer</a></td>
                            <td></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td><a href='contact_us.php'>Contact us</a></td>
                            <td><a href='donate.php'>Paypal</a></td>
                            <td></td> 
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