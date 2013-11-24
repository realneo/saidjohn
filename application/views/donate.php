<div id='intro'>
    <table>
        <tr>
            <th>Donate</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- Donate Message -->
                <?php foreach($donate_now as $donate):?>
                    <?php echo $donate->donate; ?>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->