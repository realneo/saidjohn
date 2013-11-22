<?php include('header.php'); ?>
<?php include('includes/left_pane.php'); ?>
<div id='donate_btn'><a href='donate.php'>DONATE NOW</a></div><!-- donate_btn -->
<div id='intro'>
    <table>
        <tr>
            <th>Contact Us</th>
        </tr>
        <tr>
            <td width="650px">
                <?php echo $_SESSION['msg']; ?>
                <!-- Contact Us Message -->
                <div id="contact_form">
                    <form name="contact_form" method="post" action="includes/send_form_email.php">
                        <table>
                            <tr>
                                <th>Name:</th>
                                <td><input type="text" name="fullname" value="" size="30"/></td>
                                <td rowspan="5" valign="top">
                                    <p>
                                        <strong>Mobile</strong>
                                        <br />
                                        +255653529293<br />
                                        <br />
                                        +255656833176<br />
                                        <br />
                                        <strong>Email</strong>
                                        <br />
                                        Info@saidjohn.com<br />
                                        <br />
                                        Thomas@saidjohn.com<br />
                                        <br />
                                        <br />
                                        <strong>Physical address :</strong>
                                        <br />
                                        P.O Box 21152 , Ilala Street Arusha/Mwanza<br />
                                        Near Masjid Ibaadh ilala.<br />
                                        Dar es Salaam Tanzania.<br />
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><input type="text" name="email" value="" size="30"/></td>
                            </tr>
                            <tr>
                                <th>Mobile:</th>
                                <td><input type="text" name="mobile" value="" size="30"/></td>
                            </tr>
                            <tr>
                                <th>Message:</th>
                                <td><textarea name="message"></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit">Send</button></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- contact_form -->
            </td>
        </tr>
    </table>
</div><!-- intro -->
<?php include('includes/footer.php'); ?>
<?php $_SESSION['msg'] = '';