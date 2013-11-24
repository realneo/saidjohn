<div id='intro'>
    <table>
        <tr>
            <th>Volunteer</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Volunteer Message -->
                
                <?php foreach($volunteers as $volunteer) : ?>
                
                    <?php echo $volunteer->volunteer; ?>
                
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->