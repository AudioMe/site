<div class="news">
    <?php
    $studios = new Model_Studios();
    if (isset($news))
        foreach ($news as $n) {
            $st = $studios->where('user_id', '=', $n->user_id)->find_all();
            ?>
            <div class="new">
                <h2><a href="/admin/new/<?php echo $n->id; ?>"><?php echo $n->title; ?></a> <a
                        href="/adminDelete/news/<?php echo $n->id; ?>" class="img_remove"></a></h2>


                <div class="addData">
                    <a href="/studio/view/<?php echo $n->user_id; ?>"
                       class="black_send"><?php if (isset($st[0]->name)) echo $st[0]->name; ?></a>
                    <br>
                    <small><?php echo $n->date; ?></small>
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
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную новость?");
        })
        jQuery('#menu_nav3').addClass("active");
    })
</script>
