<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>

<div id="comment-form" class="comment-form">
    <h2>Редактирование статьи</h2>
    <div id="respond m_t_40">
        <form action="/editSave/articles" onsubmit="" enctype="multipart/form-data" method="post" id="commentform" class="ui_form">
            <input type="hidden" name="articles_id" value="<?php if (isset($news->id)) echo $news->id; ?>" />
            <div>
                <label for="ntitle">Заголовок новости <span class="required">*</span></label>
                <input maxlength="150" id="ntitle" class="ui_input" name="ntitle" type="text" value="<?php if (isset($news->title)) echo $news->title;  ?>" size="30" aria-required='true'/>
            </div>

            <div>
                <label for="npreview">Краткое содержание новости<span class="required">*</span></label>
                <textarea maxlength="250" id="npreview" class="ui_textarea" name="npreview" 
                          aria-required="true"><?php if (isset($news->preview)) echo $news->preview; ?></textarea>
            </div>
            <div>
                <label for="ntext">Текст новости</label>
                <textarea id="ntext" class="input100" name="ntext" cols="45" rows="8" aria-required="true"><?php if (isset($news->text)) echo $news->text; ?></textarea>
            </div>
            <div>
                <label for="add_photos">Прикрепить изображение</label>
                <input type="file" id="add_photos" name="images[]" class="multi" accept="gif|jpg|png|jpeg|bmp" maxlength="8"/>
            </div>
            <div class="m_b_20">
                <input name="btnsubmarticles" class="ui_button common" type="submit" id="submit" value="Сохранить"/>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($images)) {
    ?>
        <?php
        foreach ($images as $image) {
            ?>
            <div class="dir_photo">
                <a href="/remove/articlesPhoto/<?php echo $image->id; ?>" class="img_remove"></a>
               <img src="/files/<?php echo $news->user_id. "/articles/prev_" . $image->id.".png"; ?>" width="160">
            </div>


        <?php

        }

        ?>

    <div class="music">
        <?php
        $i_c = 0;
        foreach ($files as $m) {
            $i_c++;
            ?>

            <p>
                <object width="300" height="40" data="/player.swf" type="application/x-shockwave-flash">
                    <param name="movie" value="/player.swf"/>
                    <param name="flashvars"
                           value="path_mp3=/files/<?php echo $news->user_id; ?>/articles/<?php echo $m->id.".mp3"; ?>&w=300&h=40&cbf=0xff0099&cb=0xffffff&cif=0xcccccc&ci=0xCF3584&cbuf=0xdddddd&ct=0xCF3584&auto=no"/>
                    <param name="wmode" value="transparent"/>
                </object>
                <a href="/remove/articlesMusic/<?php echo $m->id; ?>" class="mus_remove"></a>
            </p>
        <?php

        }
        ?>
    </div>
<?php

}

?>



<script type="text/javascript">

    tinyMCE.init({

        language : "ru",
        // General options
        mode : "exact",
        theme : "advanced",
        elements : "ntext",
        plugins : "jbimages,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        content_css: "/css/clear.css",
        content_css: "/css/style.css",
        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,jbimages, cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,blockquote,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",
        relative_urls : false

    });
    jQuery('.mus_remove').click(function () {
        return confirm("Вы действительно хотите удалить данный пример работы?");
    })

    jQuery('.img_remove').click(function(){
        return confirm("Вы действительно хотите удалить данное изображение?");
    })
</script>

