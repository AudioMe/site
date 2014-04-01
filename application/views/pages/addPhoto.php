<div class="big_text">
         <center>   Добавить фотографии</center><br>
            </div><br>
<?php
    $photos = new Model_StudioPhotos();
    $auth = Auth::instance();
    $user_temp = $auth->get_user();
    $user_id = $user_temp->id;

    $cur_photo = $photos->where('user_id','=',$user_id)->find_all();

    if ($cur_photo->count() > 0){
        ?>
        <div class="studio_images">
            <?php
            foreach($cur_photo as $p){
               ?>
                <div class="dir_photo">
                    <a href="/remove/photo/<?php echo $p->id; ?>" class="img_remove"></a>
                    <a href="/files/<?php echo $user_id."/images/".$p->url;  ?>" rel="lightbox[roadtrip]"><img src="/files/<?php echo $user_id."/images/prev_".$p->url;  ?>" width="160"></a>
                </div>
            <?php
            }
            ?>

        </div>
<?php
    }else{
        echo "Нет фотографий";
    }

?>

<form method="post" id="register_form1" onsubmit="return valid_form_add()"  enctype="multipart/form-data" action="/add/photo">
<input type="file" name="photo" accept="image/*,image/jpeg,image/jpg,image/png,image/bmp" id="add_photo" onchange="isPhotoFile(this)" />

<p><input type="submit" name="btnaddphoto" value="Отправить" /></p>
    </form>

<script type="text/javascript">
    jQuery(function () {
        jQuery('.img_remove').click(function(){
            return confirm("Вы действительно хотите удалить данное изображение?");
        })
        jQuery('#menu_addphoto').addClass("menu_active");

    })
    function isPhotoFile(val) {
        var v = val.value;
        var v = v.search(/^.*\.(?:jpg|jpeg|gif|png|bmp)\s*$/ig)
        if (v != 0) {
            jQuery('#add_photo').val('');
        }
    }

    function valid_form_add(){
        var add_photo = jQuery('#add_photo').val();

        var correct = true;
        if (add_photo.length <= 1){
            jQuery('#add_photo').css('background', 'red');
            correct = false;
        }else{
            jQuery('#add_photo').removeAttr('style');
        }

        return correct;
    }
</script>
