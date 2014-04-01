<div class="s_studio_block">
    <h2 class="p_l_10">Каталог студий</h2>
    <ul class="s_studio_list" id="studios">
<?php if (isset($studios)) {
    foreach ($studios['studios'] as $stud) {
        if(!strlen($stud['photo']))
            $stud['photo'] = '/images/img_cap.png';
            $add_class = ($stud['premium']) ? 'logo' : '';
?>
        <li class="s_studio_item">
            <div class="wrap clearfix">
            <div class="s_studio_img <?php echo $add_class;?>">
			<a href="/studio/view/<?php echo $stud['user_id']; ?>">
                <img class="wh170" src="<?= $stud['photo'] ?>" /></a>
	    </div>
                <div class="s_studio_body">
                    <a href="/studio/view/<?php echo $stud['user_id']; ?>"><h3><?php echo $stud['name']; ?></h3></a>
                    <div class="clearfix">
                        <dl class="studio_prop_list">
                            <dt class="micro">Категория:</dt><dd><?php echo $stud['extra']['studio_type']; ?></dd>
                            <dt class="point">Город:</dt><dd><?php echo $stud['extra']['city'] ?></dd>
                            <dt class="map">Адресс:</dt><dd><?php echo  $stud['address']; ?></dd>
                            <?php if(!empty($stud['metro'])) {?>
                            <dt class="metro">Метро:</dt><dd><?php echo $stud['metro'] ?></dd>
                            <?php } ?>
                            <dt class="data">Стоимость:</dt><dd>от <strong class="cherry"><?php echo  $stud['price'];?></strong> руб/час</dd>
                        </dl>
                        <div class="s_rating_box">
                            <h3>Рейтинг студии:</h3>
                            <div class="star_block rating_studio" data-average="<?php echo $stud['extra']['mark'] ?>"></div>
                            <div class="vote_count">(<?php echo $stud['extra']['count'];?> голосов)</div>
                        </div>
                    </div>
                    <div class="s_studio_bottom">
                        <span class="s_studio_desc">
                            <?php if(isset($stud['more'])) echo $stud['more'];?>
                        </span>
                        <a class="ui_button" href="/studio/view/<?php echo $stud['user_id']; ?>">
                            Подробнее о студии
                        </a>
                    </div>
                </div>
            </div>
        </li>
<?php } ?>
<?php } ?>
    </ul>
</div>
<script type="text/javascript">
    var stack_i = 1;
    function preloadNextStack() {        
        $.get('/catalog/next/' + stack_i, false,function(data,status){
            if (data.reset_i) {
                stack_i = -1;
            }
            loadNextStack(data.studios);
        }, 'json');
        
    }
    function loadNextStack(data) {      
        if (data.length) {
            stack_i++;
            var id = 'studios';        
            var next_id = parseInt($('.studio_catalog').length + 1);
            for (var i in data) {
                var item_id = 'studio_catalog_' + next_id;       
                var item = generateItem(item_id, data[i]);
                $('#' + id).append(item);                                
                next_id++;
            }
            drawRatings();
            $.waypoints('refresh');
        }
    }
    function generateItem(id, data) {
    if (3 > data['photo'].length) {
        data['photo'] = '/images/img_cap.png';
    }
    var add_class = data['premium'] > 0 ? 'logo' : '';
    var html = '';
        html +='<li class="s_studio_item" id="' + id + '">';
            html +='<div class="wrap clearfix">';
            html +='<div class="s_studio_img ' + add_class + '"><a href="/studio/view/' + data['user_id'] + '"><img class="wh170" src="' + data['photo'] + '"></a></div>';
                html +='<div class="s_studio_body">';
                    html +='<a href="/studio/view/' + data['user_id'] + '"><h3>' + data['name'] + '</h3></a>';
                    html +='<div class="clearfix">';
                        html +='<dl class="studio_prop_list">';
                            html +='<dt class="map">Город:</dt><dd>' + data['extra']['city'] + '</dd>';
                            html +='<dt class="micro">Категория:</dt><dd>' + data['extra']['studio_type'] +'</dd>';
                            html +='<dt class="map">Адресс:</dt><dd>' + data['address'] + '</dd>';
                            html +='<dt class="metro">Метро:</dt><dd>' + data['metro'] + '</dd>';
                            html +='<dt class="data">Стоимость:</dt><dd>от <strong class="cherry">' + data['price'] + '</strong> руб/час</dd>';
                        html +='</dl>';
                        html +='<div class="s_rating_box">';
                            html +='<h3>Рейтинг студии:</h3>';
                            html +='<div class="star_block rating_studio" data-average="' + data['extra']['mark'] + '"></div>';
                            html +='<div class="vote_count">(' + data['extra']['count'] + ' голосов)</div>';
                        html +='</div>';
                    html +='</div>';
                    html +='<div class="s_studio_bottom">';
                        html +='<span class="s_studio_desc">' + data['more'] + '</span>';
                        html +='<a class="ui_button" href="/studio/view/' + data['user_id'] + '">';
                            html +='Подробнее о студии';
                        html +='</a>';
                    html +='</div>';
                html +='</div>';
            html +='</div>';
        html +='</li>';
                return html;
    }
    function drawRatings(selector) {
        var selector = selector || '.rating_studio';
        jQuery(selector).jRating({
            length: 5,
            showRateInfo: false,
            decimalLength: 1,
            isDisabled: true
        });
    }
    function initScrollTrack() {
        jQuery('#menu_catalog').addClass("menu_active");        
        $('.content_wrap').waypoint(function(direction) {
            preloadNextStack();
        }, {
                offset: function() {
                        return $.waypoints('viewportHeight') - $(this).height() + 100;
                }
        });
    }
    jQuery(function () {
        initScrollTrack();
        drawRatings();
    });
</script>
