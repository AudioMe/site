<div class="a_articles_block">
<div class="article_title">
<h2 class="p_l_10">Куплю/Продам</h2>
<?php
if (isset($package) && $package['level'] > 1) {
?>
<a class="ui_button common" style="" href="/addBuy">
    Добавить/Изменить
</a>
<?php
}
?>
</div>
<div class="m_t_40">
<ul class="a_article_list">
<?php
    $imagesI = new Model_BuyPhotos();
        $studios = new Model_Studios();
        if (isset($buy))
            foreach ($buy as $art) {
                $im = $imagesI->where('buy_id','=', $art->id)->find_all();
                $st = $studios->where('user_id', '=', $art->user_id)->find_all();
                ?>
                <li class="a_article_item">
                    <div class="wrap clearfix">
                        <div class="a_article_img">
                        <?php if (isset($im) && isset($im[0])){
                            $img = $im[count($im)-1];
                        ?>
                        <a href="/buy/view/<?php echo $art->id; ?>">
                            <img src="/files/<?php echo $art->user_id . "/buy/prev_" . $img->id . ".png"; ?>" />
                        </a>
                        <?php } ?>
                        </div>
                        <div class="a_article_body">
                        <a href="/buy/view/<?php echo $art->id; ?>"><h3><?php echo $art->title; ?></h3></a>
                        <div class="a_article_text"><?php echo $art->preview;?></div>
                        <div class="a_article_link">
                            <a href="/buy/view/<?php echo $art->id; ?>">читать далее...</a></div>
                        </div>
                    </div>
                </li>
            <?php
            }
?>
</ul>
</div>
</div>
<div class="pagination">
    <?php if (isset($pagination)) echo $pagination; ?>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_buy').addClass("menu_active");
    })
</script>
