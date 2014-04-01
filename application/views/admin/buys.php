<div class="news">
    <?php
    $studios = new Model_Studios();
    if (isset($buy))
        foreach ($buy as $b) {
            $st = $studios->where('user_id', '=', $b->user_id)->find_all();
            ?>
            <div class="new">
                <h2><a href="/admin/buy/<?php echo $b->id; ?>"><?php echo $b->title; ?></a> <?php echo $b->price; ?>
                    <a href="/adminDelete/buy/<?php echo $b->id; ?>" class="img_remove"></a></h2>

                <div class="addData">
                    <a href="/studio/view/<?php echo $b->user_id; ?>"
                       class="black_send"><?php  if (isset($st[0]->name))echo $st[0]->name; ?></a>
                    <br>
                    <small><?php echo $b->date; ?></small>
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
        jQuery('#menu_nav7').addClass("active");
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данное объявление?");
        })
    });
</script>
