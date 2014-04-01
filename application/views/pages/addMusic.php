<div class="big_text">
    <center> Добавить примеры работ</center>
    <br>
</div><br>

<?php
$musics = new Model_StudioMusics();
$auth = Auth::instance();
$user_temp = $auth->get_user();
$user_id = $user_temp->id;

$cur_musics = $musics->where('user_id', '=', $user_id)->find_all();

if ($cur_musics->count() > 0) {
    ?>
    <div class="music">
        <?php
        $i_c = 0;
        foreach ($cur_musics as $m) {
            $i_c++;
            ?>

            <p>
                <object width="300" height="40" data="/player.swf" type="application/x-shockwave-flash">
                    <param name="movie" value="/player.swf"/>
                    <param name="flashvars"
                           value="path_mp3=<?php echo $m->url; ?>&name_mp3=Пример:<?php echo $i_c; ?>&w=300&h=40&cbf=0xff0099&cb=0xffffff&cif=0xcccccc&ci=0xCF3584&cbuf=0xdddddd&ct=0xCF3584&auto=no"/>
                    <param name="wmode" value="transparent"/>
                </object>
                <a href="/remove/music/<?php echo $m->id; ?>" class="img_remove"></a>
            </p>
        <?php

        }
        ?>
    </div>
<?php

}

?>


<form method="post" onsubmit="return valid_form_add()" id="register_form1" enctype="multipart/form-data"
      action="/add/music">
    <input type="file" name="music" id="add_music" accept="audio/*,audio/mpeg3" onchange="isMusicFile(this)"/>

    <p><input type="submit" name="btnaddmusic" value="Отправить"/></p>
</form>

<script type="text/javascript">
    jQuery(function () {
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данный пример работы?");
        })
        jQuery('#menu_addworks').addClass("menu_active");

    })
    function isMusicFile(val) {
        var v = val.value;
        var v = v.search(/^.*\.(?:mp3)\s*$/ig)
        if (v != 0) {
            jQuery('#add_music').val('');
        }
    }

    function valid_form_add() {
        var add_music = jQuery('#add_music').val();

        var correct = true;
        if (add_music.length <= 1) {
            jQuery('#add_music').css('background', 'red');
            correct = false;
        } else {
            jQuery('#add_music').removeAttr('style');
        }

        return correct;
    }
</script>
