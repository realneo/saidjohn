<div id='intro'>
    <table>
        <tr>
            <th>Events</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Projects -->
                <?php foreach($all_events as $event):?>
                <?php
                    if($event->image)
                    {
                        $image = $base.'/assets/images/events/'.$event->image;
                    }
                    else
                    {
                        $image = $base.'/assets/images/noevent.png';
                    }
                ?>
                <div class='event'>
                    <table>
                        <tr>
                            <td class='image'><a href='<?php echo "event?id=".$event->id; ?>'><img src='<?php echo $image; ?>' alt='event' width='195px'/></a></td>
                        </tr>
                        <tr>
                            <td><a href='<?php echo "event?id=".$project->id; ?>' class='purple'><?php echo $event->name; ?></a></td>
                         </tr>
                         <tr>
                            <td><?php echo $event->venue; ?></td>
                        </tr>
                        <tr>
                             <td class='date'><?php echo $event->date; ?></td>
                        </tr>
                    </table>
                </div>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->