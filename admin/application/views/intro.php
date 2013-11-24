<div class="span9" id="content">
    <div class="row-fluid">
        
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            The operation completed successfully
        </div>
        
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Introduction Message</div>
            </div>
            
            <div class="block-content collapse in">
                <?php echo form_open('intro/modify_intro'); ?>
                    <textarea name='intro' class='textarea span12' rows='25'>

                    <?php foreach ($introduction as $intro): ?>
                        <?php echo $intro->intro; ?>
                    <?php endforeach; ?>

                    </textarea>
                    <button class='btn btn-inverse'>Modify</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div><!-- row-fluid -->
</div><!-- span9 -->