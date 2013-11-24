<div id='intro'>
    <table>
        <tr>
            <th>Contact Us</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Contact Us Message -->
                <div id="contact_form">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('pages/contact/send_mail'); ?>
                        <table>
                            <tr>
                                <th>Name:</th>
                                <td><?php echo form_input('name'); ?></td>
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
                                <td><?php echo form_input('email'); ?></td>
                            </tr>
                            <tr>
                                <th>Mobile:</th>
                                <td><?php echo form_input('mobile'); ?></td>
                            </tr>
                            <tr>
                                <th>Message:</th>
                                <td><?php echo form_textarea('message'); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo form_submit('submit', 'Send'); ?></td>
                            </tr>
                            <?php echo form_close(); ?>

                        </table>
                </div><!-- contact_form -->
            </td>
        </tr>
    </table>
</div><!-- intro -->