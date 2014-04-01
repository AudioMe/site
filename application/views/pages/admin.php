<?php
$config = new Model_Configuration();
?>
<center>
    <img width="105" height="57" src="image/icon_scroll.png">
</center>
<div id="studios">
    <?php
    if (isset($comments))
        foreach ($comments as $stud) {
            $metro = new Model_Metro();
            $metro_temp = $metro->where('id', '=', $stud->metro)->find();
            $rating = new Model_Rating();
            $ratings = $rating->where('user_id', '=', $stud->user_id)->find_all();
            $mark = 1;
            $count = 0;

            if ($ratings->count() > 0) {
                $count = $ratings[0]->count;
                $mark = $ratings[0]->mark;
            }
            ?>

            <div class="studio">
                <a href="/adminEdit/view/<?php echo $stud->user_id; ?>" class="search_a"><h2
                        class="studio_title_4len"><?php echo $stud->name; ?>
                    </h2></a>

                <div class="studio_name"><span class="studio_choose_name">Название: </span><?php echo  $stud->name; ?>
                </div>
                <div class="studio_type"><span
                        class="studio_choose_name">Тип студии: </span><?php echo $config->studio_class[$stud->class]; ?>
                </div>
                <div class="studio_adress"><span class="studio_choose_name">Адрес: </span><?php echo  $stud->address; ?>
                </div>
                <div class="studio_metro"><span
                        class="studio_choose_name">Ст. метро: </span><?php echo  $metro_temp->name; ?></div>
                <div class="studio_metro"><span class="studio_choose_name">Цена: </span><?php echo  $stud->price; ?>
                </div>
                <div class="studio_reiting">
                    <div class="vote-wrap">
                        <div class="vote-hover" style="padding: 0px 4px; height: 32px; width: 160px;">
                            <div class="vote-block">
                                <div class="vote-stars"
                                     style='height: 32px; width: 160px; background: url("/images/stars.png") repeat scroll left top transparent;'>
                                </div>
                                <div class="vote-active"
                                     style='height: 32px; width: <?php echo round($mark * 32); ?>px; background: url("/images/stars.png") repeat scroll left bottom transparent;'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studio_image"><img src="<?php echo  $stud->photo; ?>" width="194" height="130"></div>
            </div>

        <?php
        }
    ?>


</div>