<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    if (isset($head))  echo $head;
    ?>
</head>
<body class="body_admin">

<?php
if (isset($header))
    echo $header;
?>

<div class="row-fluid" style="min-width: 1100px">
    <div class="span2">
        <?php
        if (isset($left)) {
            echo $left;
        }
        ?>
    </div>
    <div class="<?php if (isset($right)) {
        echo "span5";
    } else {
        echo "span9";
    }?>   ">
        <?php if (isset($content)) { ?>
            <?php
            echo $content;
            ?>
        <?php }?>
    </div>
    <div class="span3 offset1" style="float: right">
        <?php if (isset($right)) { ?>
            <?php
            echo $right;
            ?>
        <?php }?>
    </div>
</div>

</body>
</html>