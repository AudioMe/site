<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>

<div id="comment-form" class="comment-form">
    <div id="respond">
        <form action="/adminSave/about" onsubmit="" method="post" id="commentform">
            <p class="comment-form-comment">
                <label for="ntext">О сайте<span class="required">*</span></label>
                <textarea id="ntext" class="input100" name="ntext" cols="45" rows="20"
                          aria-required="true"><?php if (isset($about)) echo $about; ?></textarea>
            </p>

            <p class="form-submit">
                <input name="btnsubmbuy" class="btn btn-primary" type="submit" id="submit" value="Сохранить"/>
            </p>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav16').addClass("active");

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
    });
</script>