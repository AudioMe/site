<div class="news">
    <?php
    $studios = new Model_Studios();
    if (isset($articles))
        foreach ($articles as $art) {
            $st = $studios->where('user_id', '=', $art->user_id)->find_all();
            ?>
            <div class="new">
                <h2><a href="/admin/article/<?php echo $art->id; ?>"><?php echo $art->title; ?></a> <a
                        href="/adminDelete/articles/<?php echo $art->id; ?>" class="img_remove"></a></h2>
                <div class="addData">
                    <a href="/studio/view/<?php echo $art->user_id; ?>"
                       class="black_send"><?php echo $st[0]->name; ?></a>
                    <br>
                    <small><?php echo $art->date; ?></small>
                </div>
            </div>

        <?php

        }
    ?>
</div>

<div class="pagination">
    <?php echo $pagination; ?>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav5').addClass("active");
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную статью?");
        })
    });
</script>
