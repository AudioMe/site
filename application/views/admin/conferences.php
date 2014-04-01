<div class="news">
    <?php
    $studios = new Model_Studios();
    if (isset($conference))
        foreach ($conference as $conf) {
            $st = $studios->where('user_id', '=', $conf->user_id)->find_all();
            ?>
            <div class="new">
                <h2><a href="/admin/conference/<?php echo $conf->id; ?>"><?php echo $conf->title; ?></a> <a
                        href="/adminDelete/conference/<?php echo $conf->id; ?>" class="img_remove"></a></h2>

                <div class="addData">
                    <a href="/studio/view/<?php echo $conf->user_id; ?>"
                       class="black_send"><?php  if (isset($st[0]->name))echo $st[0]->name; ?></a>
                    <br>
                    <small><?php echo $conf->date; ?></small>
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
        jQuery('#menu_nav6').addClass("active");
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную конференцию?");
        })
    });
</script>
