<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    if (isset($head))
        echo $head;
    ?>
</head>
<body>
<?php
if (isset($message)) {
    echo $message;
}
?>

</body>
</html>