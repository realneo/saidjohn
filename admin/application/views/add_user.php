<div class="span9" id="content">
    <div class="row-fluid">
        
        <?php
            if(isset($error_message)){
                echo $error_message;
            }else{
                echo NULL;
            }
         
        ?>
        
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Users</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <?php echo form_open('pages/add_user_process'); ?>
                            <div class='span4'>
                                <input type="text" name="username" class="input-block-level" placeholder="Username">
                                <input type="password" name="password" class="input-block-level" placeholder="Password">
                                <input type="text" name="first_name" class="input-block-level" placeholder="First Name">
                                <input type="text" name="last_name" class="input-block-level" placeholder="Last Name">
                                <button class="btn btn-large btn-inverse btn-block" type="submit">Add User</button>
                            </div>
                        <?php echo form_close(); ?>
                        <div class='span12'>
                            <p></p>
                        </div>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                                <tbody>
                                    <?php $num = 0; ?>
                                    <?php foreach($users as $user) : ?>
                                        <?php $num ++; ?>
                                        <tr>
                                            <td><?php echo $num ?></td>
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->first_name; ?></td>
                                            <td><?php echo $user->last_name; ?></td>
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