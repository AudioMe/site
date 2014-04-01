<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if (isset($head)) echo $head; ?>
</head>
<body>
    <!-- global absulute containers start -->
    <div id="loading">&nbsp;</div>
    <a href="#" id="move_up">Наверх</a>
    <!-- global absulute containers end -->
    <div id="wrap">
        <!--HEADER_START-->
        <header>
            <?php if (isset($header)) echo $header;  ?>
        </header>
        <!--HEADER_END-->

        <!--CONTENT_START-->
        <div class="content_wrap">
            <div class="content_block width_wrap clearfix">
                <div id="topContent">
                        <?php if (!empty($topContent)) echo $topContent  ?>
                </div>
                
                <div id="container" class="left_side">
                        <?php if (!empty($content)) echo $content;  ?>
                </div>

                <div class="right_side" id="sideRight">
                        <?php if (!empty($right)) echo $right;  ?>
                </div>
            </div>
        </div>
        <!--CONTENT_END-->

        <!--FOOTER_START-->
        <footer>
            <div class="footer_block width_wrap clearfix">
                <?php if (isset($footer)) echo $footer;  ?>
            </div>
        </footer>
    </div>
</body>
</html>
