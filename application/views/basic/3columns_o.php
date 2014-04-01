<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <?php if (isset($head)) echo $head; ?>
</head>
<body>
<div id="loading">&nbsp;</div>
<div class="global_container">
    <div class="pryamougolnik">

    </div>
    <div class="header">
        <?php if (isset($header)) echo $header;  ?>
    </div>
    <div id="middle">

        <div id="topContent">
                <?php if (isset($topContent)) echo $topContent;  ?>
        </div>

        <div id="container">
            <div id="content">

                <?php if (isset($content)) echo $content;  ?>

            </div>
            <!-- #content-->
        </div>

        <div class="sidebar" id="sideRight">
            <div class="sideContent">
                <?php if (isset($right)) echo $right;  ?>
            </div>
        </div>
        <!-- .sidebar#sideRight -->

    </div>
    <!-- #middle-->
    <div class="left_up">
        <a href="#" id="move_up">Наверх</a>
    </div>

    <div class="footer">
        <?php if (isset($footer)) echo $footer;  ?>
    </div>
</div>

</body>
</html>
