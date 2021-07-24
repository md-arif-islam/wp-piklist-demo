<?php
/*
Title: Gmap
Description: A description of what my widget does
*/


echo $before_widget; ?>

    <div class="gmap_canvas">
        <iframe width="600" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=<?php echo $settings['place']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://fmovies2.org"></a><br>
    </div>

<?php echo $after_widget; ?>