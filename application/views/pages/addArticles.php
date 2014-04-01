<script type="text/javascript" src="/tinymce/tiny_mce.js"></script>


<div class="news">

    <?php
if (count($articles)){
        ?> 
        <h2 class="">Ваши статьи</h2>
        <?php
        foreach ($articles as $n) {
            ?>
            <div class="new">
                <h2>
                    <a class="atitle" href="/articles/view/<?php echo $n->id; ?>"><?php echo $n->title; ?></a>
                    <a href="/remove/articles/<?php echo $n->id; ?>" class="img_remove">&nbsp;</a>
                    <a href="/edit/articles/<?php echo $n->id; ?>" class="img_edit">&nbsp;</a>
                </h2>
            </div>

        <?php

        }
} ?>
</div>



<div id="articles" class="articles-tabs">
	<ul class="tabs">
		<li><a href="#articles-add">Добавить статью</a></li>
		<li><a href="#articles-all">Мои статьи</a></li>
	</ul>
	
	<div id="articles-add">
		<ul class="steps">
			<li class="active">1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
		</ul>
		<div class="content">
			<form action="/add/articles" onsubmit="" enctype="multipart/form-data" method="post" id="commentform">
				<div class="group">
					<label for="ntitle">Название статьи:</label>
					<input type="text" name="ntitle" />
				</div>
				<div class="group">
					<label for="npreview">Краткое описание:</label>
					<textarea id="npreview" name="npreview"></textarea>
				</div>
				<div class="group">
					<label for="ntext" class="p_b_10">Текст статьи:</label>
					<textarea id="ntext" name="ntext"></textarea>
				</div>
				<div class="group">
					<!--label>Изображение статьи:</label>
					<div class="image" style="background: url('/images/add-photo.png') #fff no-repeat center center;"></div-->
                    
                    <label for="add_photos" class="p_b_10">Изображение статьи</label>
                    <input type="file" class="" id="add_photos" name="images[]" class="multi" accept="gif|jpg|png|jpeg|bmp" maxlength="1"/>
				</div>
				<div class="group last">
					<input type="submit" id="submit" value="Добавить статью" />
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="articles-all">
		<ul class="articles-all-list">
			<li>
				<div class="articles-header">
					<div class="title">Adobe Audition - решение проблем</div>
					<div class="date">Добавлена: 2 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
			
			<li>
				<div class="articles-header">
					<div class="title">Основы звукозаписи</div>
					<div class="date">Добавлена: 3 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
			
			<li>
				<div class="articles-header">
					<div class="title">Adobe Audition - решение проблем</div>
					<div class="date">Добавлена: 2 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
			
			<li>
				<div class="articles-header">
					<div class="title">Основы звукозаписи</div>
					<div class="date">Добавлена: 3 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
			
			<li>
				<div class="articles-header">
					<div class="title">Adobe Audition - решение проблем</div>
					<div class="date">Добавлена: 2 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
			
			<li>
				<div class="articles-header">
					<div class="title">Основы звукозаписи</div>
					<div class="date">Добавлена: 3 недели назад</div>
					<div class="clear"></div>
				</div>
				<div class="articles-body">
					<p>
						На современном этапе развития техники, компьютерная студия на базе РС, превосходит по своим возможностям профессиональные студии Лондона и Лос-Анжелеса пятнадцатилетней давности. <br/>
						Производства многоканального и hi-res-звука (аудио высокого разрешения), продуманной акустикой контрольных помещений, сложной мониторинговой системой и наличием специалистов высокого класса.<br />
						Но, согласитесь, сейчас простой аудио-компакт диск (CDDA) является основным пользовательским стандартом и уйдет он очень не скоро. А это 16 бит, 44.1 КГц… 
					</p>
				</div>
				<ul class="articles-buttons">
					<li><a href="#" class="edit">Редактировать</a></li>
					<li><a href="#" class="delete">Удалить</a></li>
				</ul>
				<div class="clear"></div>
			</li>
		</ul>
		<ul class="pager">
			<li><a href="#">« Предыдущая страница</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">...</a></li>
			<li class="active"><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">Следующая страница »</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
    jQuery(function () {
        
        $(".articles-tabs").tabs();
        
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную статью?");
        })

        tinyMCE.init({

            language : "ru",
            // General options
            mode : "exact",
            theme : "advanced",
            elements : "ntext",
            plugins : "jbimages,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
            //content_css: "/css/clear.css",
            //content_css: "/css/style.css",
            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,jbimages, cleanup,help,code,|,preview,|,forecolor,backcolor",
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
