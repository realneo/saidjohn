<div class="span9" id="content">
    <div class="row-fluid">
        
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            The operation completed successfully
        </div>
        
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">News</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                                <tbody>
                                    <?php $num = 0; ?>
                                    <?php foreach($news as $new) : ?>
                                        <?php $num ++; ?>
                                        <tr>
                                            <td><?php echo $num ?></td>
                                            <td><?php echo $new->date; ?></td>
                                            <td><?php echo $new->name; ?></td>
                                            <td>
                                                <a href='#' class='btn btn-small'><i class='icon-edit'></i> Edit</a>
                                                <a href='#' class='btn btn-danger btn-small'><i class='icon-remove-sign icon-white'></i> Delete</a>
                                            </td>
                                        </tr>
                                    
                                    <?php endforeach; ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div><!-- row-fluid -->
</div><!-- span9 -->