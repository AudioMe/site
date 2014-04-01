<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>

<div class="news">
    <?php
if (count($buy)) {?>
<h2>Ваши Куплю-Продам</h2>
<?php
        foreach ($buy as $b) {
            ?>
            <div class="new">
                <h2><a href="/buy/view/<?php echo $b->id; ?>"><?php echo $b->title; ?></a> <?php echo Model_Currencies::getFormatedPrice($b->currency_id, $b->price); ?> <a
                        href="/remove/buy/<?php echo $b->id; ?>" class="img_remove"></a>
                    <a href="/edit/buy/<?php echo $b->id; ?>" class="img_edit"></a>
                </h2>
            </div>

        <?php

        }
}?>
</div>


<h2>Добавить Куплю-Продам</h2>
<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/add/buy" onsubmit="" enctype="multipart/form-data" method="post" id="commentform" class="ui_form">
            <div>
                <label for="ntitle">Заголовок <span class="required cherry">*</span></label>
                <input id="ntitle" maxlength="150" class="ui_input" name="ntitle" type="text" value="" size="30" aria-required='true'/>
            </div>

            <div>
                <label for="nprice">Цена <span class="required cherry">*</span></label>
                <input maxlength="10" id="nprice" class="ui_input" name="nprice" type="text" value="" size="250" aria-required='true'/>
            </div>
            <div class="w150">
                <label for="currency">Валюта<span class="required cherry">*</span></label>
                <select class="w150" id="currency" name="currency">
                <?php
                foreach ($currencies as $currency) { ?> 
                    <option value="<?php echo $currency['currency_id'];?>"><?php echo $currency['title'];?></option>
                <?php }?>
                </select>
            </div>
            <div>
                <label for="npreview">Краткое содержание<span class="required cherry">*</span></label>
                <textarea maxlength="250" id="npreview" class="ui_textarea" name="npreview" cols="45" rows="8"
                          aria-required="true"></textarea>
            </div>
            <div>
                <label for="ntext">Полный текст</label>
                <textarea id="ntext" class="ui_textarea" name="ntext" cols="45" rows="8" aria-required="true"></textarea>
            </div>
            <div>
                <label for="add_photos">Прикрепить изображение</label>
                <input type="file" name="images[]" id="add_photos" class="multi" accept="gif|jpg|png|jpeg|bmp" maxlength="8"/>
            </div>
            <div>
                <input name="btnsubmbuy" class="ui_button common" type="submit" id="submit" value="Добавить"/>
            </div>
        </form>
    </div>
    <!-- #respond -->
</div>

<script type="text/javascript">
    jQuery(function () {
	$("#nprice").numericInput({ allowFloat: true, allowNegative: false});

        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данное объявление?");
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
    });
</script>
