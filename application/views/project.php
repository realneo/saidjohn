<div id='intro'>
    <table>
        <tr>
            <th>Projects</th>
        </tr>
        <tr>
            <td>
                <table>
                    <?php foreach($project_by_id as $project) : ?>
                        <?php
                            if($project->image)
                            {
                                $image = $base.'/assets/images/projects/'.$project->image;
                            }
                            else
                            {
                                $image = $base.'/assets/images/noevent.png';
                            }
                        ?>
                        <tr><td style= 'font-size:23px;'><?php echo $project->name; ?></td></tr>
                        <tr><td><img src="<?php echo $image; ?>" alt="<?php echo $project->name; ?>" width='650px'/></td></tr>
                        <tr><td><img src="<?php echo $base.'/images/projects/'.$image; ?>" alt="<?php echo $project->name; ?>" width='650px'/></td></tr>
                        <tr><td><?php echo $project->description; ?></td></tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>
</div><!-- intro -->