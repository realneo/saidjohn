<div id='intro'>
    <table>
        <tr>
            <th>Projects</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Projects -->
                <?php foreach($all_projects as $project):?>
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
                <div class="event">
                    <table>
                        <tr>
                            <td><a href='<?php echo "project?id=".$project->id; ?>'><img src='<?php echo $image; ?>' alt='event' width='195px'/></a></td>
                        </tr>
                        <tr>
                            <td><a href='<?php echo "project?id=".$project->id; ?>' class='purple'><?php echo $project->name;?></a></td>
                        </tr>
                        <tr>
                            <td><?php echo $project->brief; ?></td>
                        </tr>
                    </table>
                </div>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->