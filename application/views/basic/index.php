<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <?php if (isset($head)) echo $head; ?>
</head>
<body>
    <!-- global absulute containers start -->
    <div id="loading">&nbsp;</div>
    <div class="left_up"><a href="#" id="move_up">Наверх</a></div>
    <!-- global absulute containers end -->
    <div id="wrap">
        <!--HEADER_START-->
        <header>
            <?php if (isset($header)) echo $header;  ?>
        </header>
        <!--HEADER_END-->

        <!--CONTENT_START-->
        <div class="content_wrap">
            <div class="content_block width_wrap">
                <div id="topContent">
                        <?php if (isset($topContent)) echo $topContent  ?>
                </div>
                <div id="catalog_block">
                    <div class="clearfix">
                        <div id="container">
                                <?php if (isset($content)) echo $content;  ?>
                        </div>

                        <div class="banner_block" id="sideRight">
                                <?php if (isset($right)) echo $right;  ?>
                        </div>
                    </div>
                    <!-- .sidebar#sideRight -->
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
