<!DOCTYPE html>
<html>
<head>
    <?php if (isset($head)) echo $head; ?>
</head>
<body>
<div class="global_container">
    <div class="header">
        <?php if (isset($header)) echo $header;  ?>
    </div>
    <div id="middle">

        <div id="topContent">
            <?php if (isset($topContent)) echo $topContent;  ?>
        </div>

        <div id="container">
            <div id="content">

                <div class="big_text select_color">
                    <?php
                    if (isset($message))
                        echo $message;
                    ?>
                </div>

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
