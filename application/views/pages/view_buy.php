<?php
$config = new Model_Configuration();
?>

<script src="http://vk.com/js/api/openapi.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
    VK.init({
        apiId: <?php echo $config->vkKEY; ?>,
        onlyWidgets: true
    });
</script>

<?php
$studios = new Model_Studios();
$st = $studios->where('user_id', '=', $buy->user_id)->find_all();
?>

<div class="clearfix">
    <div class="article_title">
    <h2><?php if (isset($buy->title)) echo $buy->title;?></h2>
    <div class="article_date">дата публикации <?php echo $buy->date;?></div>
    <a href="/buy" class="ui_button arrow">Назад</a>
    </div>
    <div class="article_body">
        <?php 
        if (isset($images) && isset($images[0])) {
        $image = $images[count($images)-1];?>
        <img class="float_l" src="/files/<?php echo $buy->user_id . "/buy/prev_" . $image->id . ".png"; ?>" class="float_l" />
        <?php } ?>
        <h3><?php echo str_replace('&nbsp;', ' ', $buy->preview);?></h3>
        <?php
        if (isset($buy->text) && $buy->text != "") { 
            $text = html_entity_decode($buy->text);
            echo $text;
        }?>
    </div>
</div>

<div class="share_block clearfix">
    <div class="share_text">Поделится:</div>
    <div class="share42init" data-title="<?php if (isset($buy->title)) echo $buy->title; ?>"></div>
</div>
<?php
$stud = $studios->where('user_id', '=', $buy->user_id)->find();
if (isset($stud->id)) { ?>

    <div class="avatar">
        <div class="studio_image_e"><?php if (strlen($stud->photo) >= 3) { ?>
                <a href="/studio/view/<?php echo $stud->user_id; ?>">
                    <img class="b_round wh100" src="<?php echo  $stud->photo; ?>">
                </a>
            <?php } ?></div>
        <div class="image_publish_txt">Опубликовано от: <a href="/studio/view/<?php echo $stud->user_id;?>" class="search_a"><?php echo $stud->name;?></a></div>
    <div class="clear_b"></div>
    </div>
<?php } ?>
<?php
    $imagesI = new Model_BuyPhotos();
        if (isset($art_compare)) {?>
<div class="article_same_block">
    <h3>Читайте на ту же тему:</h3>
    <ul class="article_same_list clearfix">
        <?php
        foreach ($art_compare as $art) {
            $im = $imagesI->where('buy_id', '=', $art->id)->find_all();
        ?>
        <li class="article_same_item">
            <a href="/buy/view/<?php echo $art->id; ?>">
                <div class="article_same_img">
                    <?php if (isset($im) && isset($im[0])) {
                    $img = $im[0];
                    ?>
                    <img src="/files/<?php echo $art->user_id . "/buy/prev_" . $img->id . ".png"; ?>"/>
                    <?php } ?>
                </div>
                <div class="article_same_body">
                    <div class="article_same_title"><?php echo $art->title; ?></div>
                    <div class="article_same_text"><?php echo $art->preview;?></div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>


<!-- Begin Comments -->
<?php

function children($comments, $id)
{
    $child_comments = array();
    foreach ($comments as $com) {
        if ($com->root == $id) {
            array_push($child_comments, $com);
        }
    }
    return $child_comments;
}



function print_comment($comment, $other_comments, $left)
{
    $com_image = "";
    if (isset($comment->add_user_id)){
        $tstudios = new Model_Studios();
        $t_st = $tstudios->where('user_id','=',$comment->add_user_id)->find();
        if (isset($t_st->photo)){
            $com_image = $t_st->photo;
        }
    }
    ?>
    <ul class="root_comment comments_list" style="margin-left: <?php echo $left; ?>px;">
    <input type="hidden" value="<?php echo $comment->id; ?>" class="comment_id"/>
        <li class="comment_item comment">
            <div class="wrap clearfix comment">
                <div class="comment_img">
                    <?php
                    if (isset($com_image) && strlen($com_image) > 3) {?>
                        <img src="<?php echo $com_image; ?>" class="comment_image">
                    <?php } ?>
                </div>
                <div class="comment_body">
                    <span class="comment_name"><?php echo $comment->name; ?></span>
                    <div class="comment_date">написано <?php echo $comment->date; ?></div>
                    <div class="comment_text"><?php echo $comment->text; ?></div>
                    <div class="comment_vote_block">
                        <span class="vote_yes like">
                            <em class="like_count">(<?php echo $comment->like; ?>)</em>
                        </span>
                        <span class="vote_no dlike">
                            <em class="dlike_count">(<?php echo $comment->dlike;?>)</em>
                        </span>
                        <a href="#" onclick="return false;" class="comment_replay select_color ansver">ответить</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <?php
    $child_comments = children($other_comments, $comment->id);
    foreach ($child_comments as $c) {
        print_comment($c, $other_comments, $left + 20);
    }

}
if (isset($comments) && count($comments) > 0) {
    $root_coments = array();
    $other_comments = array();
    foreach ($comments as $com) {
        if ($com->root == 0) {
            array_push($root_coments, $com);
        } else {
            array_push($other_comments, $com);
        }
    }
    ?>
    <div id="comments">

        <?php
        foreach ($root_coments as $comment) {
            print_comment($comment, $other_comments, 0);
        }

        ?>


    </div>
<?php
}
?>
<div style="overflow: hidden">
    <div id="vk_comments2" style="margin: -160px 0 0 0;"></div>
</div>


<div id="wrapper" class="tab1">
    <ul class="commets_type_list clearfix">
        <li><a class="tab1 tabs_href" href="javascript:void(0);">Комментировать через AudioMe</a></li>
        <li><a class="tab2 tabs_href" href="javascript:void(0);">Комментировать через Вконтакте</a></li>
        <!-- <li><a href="#">Комментировать через Facebook</a></li> -->
    </ul>

    <div class="tab1 clearfix">

        <div id="comment-form" class="comment-form tab1">

            <div id="respond" class="tab1 p_comments_block">
                <form action="/addFree/commentsBuy/<?php if (isset($buy->id)) echo $buy->id;?>"
                      onsubmit="return valid_form_comments();"
                      method="post"
                      id="commentform">
                    <input type="hidden" value="0" id="root" name="root"/>
                        <div class="clerfix">
                            <div class="left">
                            
                                <?php
                                $auth = Auth::instance();
                                $name = "";
                                $phone = "";
                                if ($auth->logged_in()) {
                                    $user_temp = $auth->get_user();
                                    $user_id = $user_temp->id;
                                    $studios = new Model_Studios();
                                    $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                                    if (isset($studio_temp->name)) {
                                        $name = $studio_temp->name;
                                    }
                                    if (isset($studio_temp->phone)) {
                                        $phone = $studio_temp->phone;
                                    }
                                }

                                ?>
                                <?php if (!strlen($phone) || !strlen($name)) {?>
                                <div class="clearfix mtb7">
                                    <div class="float_l" style="width: 49%;">
                                        <input id="author" name="name" type="text" class="ui_input" placeholder="Ваше имя *" />
                                        </div>
                                    <div class="float_r" style="width: 49%;">
                                        <input id="phone" name="phone" type="text" class="ui_input" placeholder="Телефон" />
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="clearfix" style="margin-bottom: 7px;">
                                    <input id="author" name="name" value="<?php echo $name;?>" type="hidden" class="ui_input" placeholder="Ваше имя *" />
                                    <input id="phone" value="<?php echo $phone;?>" name="phone" type="hidden" class="ui_input" placeholder="Телефон" />
                                </div>
                                <?php } ?>

                                <div id="re_comment"><i>Re: <span></span></i></div>
                                <div class="m_b_5">
                                    <textarea class="ui_textarea" id="comment" name="comment" placeholder="Комментарий *" cols="45"
                                              rows="8" aria-required="true"></textarea>
                                </div>
                                <div class="form_legend"><span class="cherry">*</span> - обязательные поля для заполнения</div>
                            </div>
                            <div class="right" style="padding-top: 60px;">
                                <input name="btnsubmincomments" class="ui_button common" type="submit" id="submit" value="Отправить"/>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tab2 vk_comments clearfix">
        <div class="tab2" style="height: 160px; overflow: hidden">
            <div class="tab2" id="vk_comments"></div>
        </div>
    </div>
    <div class="tab3 clearfix">
        <div class="tab3" style="height: 160px; overflow: hidden">
            <div class="tab3" id="vk_facebook"></div>
        </div>
    </div>
</div>
<?php

?>

<div class="overlay" id="overlay" style="display:none;"></div>
<div class="box" id="box">
    <a class="boxclose" id="boxclose"></a>

    <div id="message_text"></div>
</div>
<script type="text/javascript">
    VK.Widgets.Comments('vk_comments2', {limit: 10});
</script>

<script type="text/javascript">
    VK.Widgets.Comments('vk_comments');
</script>


<script type="text/javascript">

    jQuery(function () {
        jQuery("#phone").mask("+7(999) 999 99 99");

        jQuery('.tabs_href').click(function () {
            if (jQuery(this).attr('class') != jQuery('#wrapper').attr('class')) {
                jQuery('#wrapper').attr('class', jQuery(this).attr('class'));
            }
        });

        jQuery('.ansver').click(function () {
            var parent = jQuery(this).parent().parent().parent().parent().parent();
            var id = jQuery('.comment_id', parent).val();
            var st_name = (parent).find('span.comment_name').html();
            $('#re_comment span').html(st_name);
            $('#re_comment').css('visibility', 'visible');
            jQuery('#root').val(id);
            jQuery('#comment').focus();
        })

        jQuery('.like').click(function () {
            var parent = jQuery(this).parent().parent().parent().parent().parent();
            var id = jQuery('.comment_id', parent).val();
            jQuery.ajax({
                type: "POST",
                data: ({id: id}),
                url: "/addFree/likeBuy",
                dataType: "text",
                success: function (data) {
                    jQuery('.like_count', parent).text(data);
                }
            });


        })

        jQuery('.dlike').click(function () {
            var parent = jQuery(this).parent().parent().parent().parent().parent();
            var id = jQuery('.comment_id', parent).val();
            jQuery.ajax({
                type: "POST",
                data: ({id: id}),
                url: "/addFree/dlikeBuy",
                dataType: "text",
                success: function (data) {
                    jQuery('.dlike_count', parent).text(data);
                }
            });

        })

    });

    function valid_form_comments() {
        var c_name = jQuery('#author').val();
        var c_phone = jQuery('#phone').val();
        var c_comment = jQuery('#comment').val();
        var correct = true;
        if (c_name.length <= 1) {
            jQuery('#author').css('background', 'red');
            correct = false;
        } else {
            jQuery('#author').removeAttr('style');
        }

        if (c_phone.length <= 7) {
            jQuery('#phone').css('background', 'red');
            correct = false;
        } else {
            jQuery('#phone').removeAttr('style');
        }

        if (c_comment.length <= 1) {
            jQuery('#comment').css('background', 'red');
            correct = false;
        } else {
            jQuery('#comment').removeAttr('style');
        }
        return correct;
    }

</script>

