<div class="span9" id="content">
    <div class="row-fluid">
        
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            The operation completed successfully
        </div>
        
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">About Us Information</div>
            </div>
            
            <div class="block-content collapse in">
                <?php echo form_open('pages/modify_about'); ?>
                    <textarea name='about' class='textarea span12' rows='25'>

                    <?php foreach ($about_us as $about): ?>
                        <?php echo $about->about_us; ?>
                    <?php endforeach; ?>

                    </textarea>
                    <button class='btn btn-inverse'>Modify</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div><!-- row-fluid -->
</div><!-- span9 -->