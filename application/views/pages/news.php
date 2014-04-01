<?php
$auth = Auth::instance();
$is_premium = false;
$user_id = -1;
if ($auth->logged_in() && !$auth->logged_in("admin")) {
    $user_temp = $auth->get_user();
    $user_id = $user_temp->id;

    $comments = new Model_Studios();
    $studio_temp = $comments->where('user_id', '=', $user_id)->find();
    if (isset($studio_temp->id)) {
        $is_premium = $studio_temp->premium;
    }
}
$date_end = $date_cur = null;

$difDate = null;
$user_premium = false;
if (isset($is_premium) && $is_premium) {
    $premiums = new Model_Premium();

    $prem = $premiums->where('user_id', '=', $user_id)->find();
    if (isset($prem->id)) {
        $date_end = date_create($prem->date_end);
        $date_cur = date_create(date("Y-m-d"));
        $difDate = date_diff($date_cur, $date_end);

        if ($date_cur < $date_end) {
            $user_premium = true;
        }
    }
}
?>
<div class="a_articles_block">
    <h2 class="p_l_10">Новости</h2>
    <ul class="a_article_list">
    <?php
    $imagesI = new Model_NewsPhotos();
    $studios = new Model_Studios();
    if (isset($news))
        foreach ($news as $art) {
            $im = $imagesI->where('news_id','=', $art->id)->find_all();
            $st = $studios->where('user_id', '=', $art->user_id)->find_all();
            ?>
            <li class="a_article_item">
                <div class="wrap clearfix">
                    <div class="a_article_img">
                    <?php if (isset($im) && isset($im[0])){
                        $img = $im[count($im)-1];
                    ?>
                    <a href="/news/view/<?php echo $art->id; ?>">
                        <img src="/files/<?php echo $art->user_id . "/news/prev_" . $img->id . ".png"; ?>" />
                    </a>
                    <?php } ?>
                    </div>
                    <div class="a_article_body">
                    <a href="/news/view/<?php echo $art->id; ?>"><h3><?php echo $art->title; ?></h3></a>
                    <div class="a_article_text"><?php echo $art->preview;?></div>
                    <div class="a_article_link">
                        <a href="/news/view/<?php echo $art->id; ?>">читать далее...</a></div>
                    </div>
                </div>
            </li>
        <?php
        }
    ?>
    </ul>

</div>

<div class="pagination">
    <?php if (isset($pagination)) echo $pagination; ?>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_news').addClass("menu_active");
    })
</script>
