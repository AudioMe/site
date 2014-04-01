
<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>


<div class="news">
    <?php
if (count($news)){?>

<h2>Ваши новости</h2>
<?php
        foreach ($news as $n) {
            ?>
            <div class="new">
                <h2><a href="/news/view/<?php echo $n->id; ?>"><?php echo $n->title; ?></a> <a
                        href="/remove/news/<?php echo $n->id; ?>" class="img_remove"></a>
                    <a href="/edit/news/<?php echo $n->id; ?>" class="img_edit"></a>
                </h2>
            </div>

        <?php

        }
}?>
</div>


<h2>Добавить новость</h2>
<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/add/news" onsubmit="" enctype="multipart/form-data" method="post" id="commentform" class="ui_form">
            <div>
                <label for="ntitle">Заголовок новости <span class="required cherry">*</span></label>
                <input maxlength="150" id="ntitle" class="ui_input" name="ntitle" type="text" value="" size="30" aria-required='true'/>
            </div>

            <div>
                <label for="npreview">Краткое содержание новости<span class="required cherry">*</span></label>
                <textarea maxlength="250" id="npreview" class="ui_textarea" name="npreview"
                          aria-required="true"></textarea>
            </div>
            <div>
                <label for="ntext">Текст новости</label>
                <textarea id="ntext" class="ui_textarea" name="ntext" aria-required="true"></textarea>
            </div>
            <div>
                <label for="add_photos">Изображение новости</label>
                <input type="file" id="add_photos" name="images[]" class="multi" accept="gif|jpg|png|jpeg|bmp" maxlength="1"/>
            </div>
            <div>
                <input name="btnsubmnews" class="ui_button common" type="submit" id="submit" value="Добавить новость"/>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную новость?");
        })


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


        jQuery('#menu_addnews').addClass("menu_active");
    });

</script>
