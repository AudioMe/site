<div class="big_text">
    <center> Оплата через Яндекс Деньги</center>
    <br>
</div><br>

<?php
if (empty($package)) {
    echo $package_error;
}
else if (!$is_ok) {
    echo $error;
}
else {
    echo $ok;
}
?>