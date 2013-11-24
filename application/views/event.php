<div id='intro'>
    <table>
        <tr>
            <th>Projects</th>
        </tr>
        <tr>
            <td>
                <table>
                    <?php foreach($event_by_id as $event) : ?>
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
                        <tr><td><?php echo $event->date; ?></td></tr>
                        <tr><td style= 'font-size:23px;'><?php echo $event->name; ?></td></tr>
                        <tr><td><img src='<?php echo $image; ?>' alt='<?php echo $name; ?>' width='650px'/></td></tr>
                        <tr><td><i><?php echo $event->venue; ?></i></td></tr>
                        <tr><td><?php echo $event->description; ?></td></tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>
</div><!-- intro -->