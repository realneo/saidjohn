<div id='intro'>
    <table>
        <tr>
            <th>Introduction</th>
        </tr>
        <tr>
            <td>
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src='<?php echo $base; ?>/assets/images/slides/j1.jpg' alt='' />
                        </li>
                        <li>
                            <img src='<?php echo $base; ?>/assets/images/slides/j2.jpg' alt='' />
                        </li>
                        <li>
                            <img src='<?php echo $base; ?>/assets/images/slides/j3.jpg' alt='' />
                        </li>
                        <li>
                            <img src='<?php echo $base; ?>/assets/images/slides/j4.jpg' alt='' />
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td width="410px">
                <!-- Introduction Message -->
                <?php foreach($introduction as $intro):?>
                    <?php echo $intro->intro; ?>
                <?php endforeach; ?>
               
            </td>
        </tr>
    </table>
</div><!-- intro -->