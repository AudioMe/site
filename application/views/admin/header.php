<div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">AudioMe</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="/admin"><i class="icon-home icon-white"></i> Главная</a></li>
                    <li><a href="/admin/noPublicStudios"><i class=" icon-minus-sign icon-white"></i> Неопубликованные
                            студии</a></li>
                    <li><a href="/admin/noPublicArticles"><i class=" icon-minus-sign icon-white"></i> Неопубликованные
                            статьи</a></li>
                </ul>
                <div class="pull-right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown">Здравствуйте, <?php if(isset($username)) echo $username; ?> <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/user"><i class="icon-cog"></i> Настройки</a></li>
                                <li><a href="/admin/users"><i class="icon-user"></i> Список администраторов</a></li>
                                <li><a href="/admin/works"><i class="icon-edit"></i> Список работ</a></li>
                                <li class="divider"></li>
                                <li><a href="/adminLogin/out"><i class="icon-off"></i> Выход</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>