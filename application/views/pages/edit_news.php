<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>
<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/editSave/news" onsubmit="" enctype="multipart/form-data" method="post" id="commentform" class="ui_form">
            <input type="hidden" name="news_id" value="<?php if (isset($news->id)) echo $news->id; ?>" />
            <div>
                <label for="ntitle">Заголовок новости <span class="required">*</span></label>
                <input maxlength="150" id="ntitle" class="ui_input" name="ntitle" type="text" value="<?php if (isset($news->title)) echo $news->title;  ?>" size="30" aria-required='true'/>
            </div>

            <div>
                <label for="npreview">Краткое содержание новости<span class="required">*</span></label>
                <textarea maxlength="250" id="npreview" class="ui_input" name="npreview" cols="45" rows="8"
                          aria-required="true"><?php if (isset($news->preview)) echo $news->preview; ?></textarea>
            </div>
            <div>
                <label for="ntext">Текст новости<span class="required cherry">*</span></label>
                <textarea id="ntext" class="ui_textarea" name="ntext" aria-required="true"><?php if (isset($news->text)) echo $news->text; ?></textarea>
            </div>
            <div>
                <label for="add_photos">Прикрепить изображение</label>
                <input type="file" id="add_photos" name="images[]" class="multi" accept="gif|jpg|png|jpeg|bmp" maxlength="8"/>
            </div>

            <div>
                <input name="btnsubmnews" class="ui_button common" type="submit" id="submit" value="Сохранить"/>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($images)) {
    ?>
    <div class="studio_imgs m_t_40">
        <?php
        foreach ($images as $image) {
            ?>
            <div class="">
                <a href="/remove/newsPhoto/<?php echo $image->id; ?>" class="img_remove"></a>
               <img src="/files/<?php echo $news->user_id. "/news/prev_" . $image->id.".png"; ?>">
            </div>


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
        elements : "ntext",
        theme : "advanced",
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

    jQuery('.img_remove').click(function(){
        return confirm("Вы действительно хотите удалить данное изображение?");
    })
</script>

