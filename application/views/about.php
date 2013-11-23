<div id='intro'>
    <table>
        <tr>
            <th>About Us</th>
        </tr>
        <tr>
            <td width="650px">
                <!-- About Us Message -->
                <?php foreach($about_us as $about):?>
                <?php echo $about->about_us; ?>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
</div><!-- intro -->