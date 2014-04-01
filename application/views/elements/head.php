<?php
    $config = new Model_Configuration();
?>
    <meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="/css/ui.css" />    

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="/favicon.png" />

    <title><?php if(isset($title)) echo $title; ?></title>
    <!-- <link type="text/css" rel="stylesheet" media="all" href="/css/clear.css"/> -->
    <!--link type="text/css" rel="stylesheet" media="all" href="/css/smoothness/jquery-ui.css"/-->
    <link type="text/css" rel="stylesheet" media="all" href="/css/lightbox.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="/css/jRating.jquery.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="/css/prettyAM.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="/css/jquery.formstyler.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="/css/jquery.bxslider.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="/css/player.css"/>
    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/numericInput.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery.elegantcarousel.min_ob.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="/js/waypoints.min.js"></script>
    <script type="text/javascript" src="/js/jquery.form.js"></script>
    <script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.js"></script>
    <script type="text/javascript" src="/js/init.js"></script>
    <script type="text/javascript" src="/js/share42.js"></script>
    <script type="text/javascript" src="/js/prettyAM.js"></script>
    <script type="text/javascript" src="/js/jquery.formstyler.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="/js/player.js"></script>

    <script src="http://api-maps.yandex.ru/1.1/index.xml?key=<?php echo $config->mapKey; ?>"
    type="text/javascript"></script>
