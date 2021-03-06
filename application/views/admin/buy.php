<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>

<?php
$studios = new Model_Studios();
$st = $studios->where('user_id', '=', $buy->user_id)->find_all();
?>
<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/adminSave/buy" onsubmit="" enctype="multipart/form-data" method="post" id="commentform">
            <input type="hidden" name="buy_id" value="<?php if (isset($buy->id)) echo $buy->id; ?>"/>

            <p class="comment-form-author">
                <label for="ntitle">Заголовок <span class="required">*</span></label>
                <input id="ntitle" class="input100" name="ntitle" type="text"
                       value="<?php if (isset($buy->title)) echo $buy->title; ?>" size="30" aria-required='true'/>
            </p>

            <p class="comment-form-author">
                <label for="nprice">Цена <span class="required">*</span></label>
                <input id="nprice class=" input100" name="nprice" type="text"
                value="<?php  if (isset($buy->price)) echo $buy->price; ?>" size="250" aria-required='true'/>
            </p>

            <p class="comment-form-comment">
                <label for="npreview">Краткое содержание<span class="required">*</span></label>
                <textarea id="npreview" class="input100" name="npreview" cols="45" rows="8" aria-required="true">
                    <?php if (isset($buy->preview)) echo $buy->preview; ?>
                </textarea>
            </p>


            <p class="comment-form-comment">
                <label for="ntext">Полный текст<span class="required">*</span></label>
                <textarea id="ntext" class="input100" name="ntext" cols="45" rows="8" aria-required="true">
                    <?php if (isset($buy->text)) echo  $buy->text; ?>
                </textarea>
            </p>

            <p>
                <label for="add_photos">Прикрепить изображение</label>
                <input type="file" id="add_photos" name="images[]" class="multi" accept="gif|jpg|png|jpeg|bmp"
                       maxlength="8"/>
            </p>

            <p class="form-submit">
                <input name="btnsubmbuy" class="btn btn-primary" type="submit" id="submit" value="Сохранить"/>
            </p>
        </form>
    </div>

    <?php
    if (isset($images)) {
        ?>

            <?php

            foreach ($images as $image) {
                ?>
                <div class="dir_photo">
                    <a href="/adminDelete/buyPhoto/<?php echo $image->id; ?>" class="img_remove"></a>
                   <img
                            src="/files/<?php echo $buy->user_id . "/buy/prev_" . $image->id . ".png"; ?>" width="160">
                </div>


            <?php

            }

            ?>

    <?php

    }

    ?>
    <div class="addData">
        <a href="/studio/view/<?php echo $buy->user_id; ?>"
           class="black_send"><?php  if (isset($st[0]->name))echo $st[0]->name; ?></a>
        <br>
        <small><?php echo $buy->date; ?></small>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        tinyMCE.init({

            language : "ru",
            // General options
            mode : "textareas",
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

        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данное изображение?");
        })
    });
</script>
