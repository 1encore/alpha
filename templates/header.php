<header class="top">
    <?php if($page != "main"){ ?>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <p><a href="?page=contact#call" style="color: #fff;">Остались вопросы?</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="tel: +7 702 980 01 02">+7 702 980 01 02</a></li>
                                <li><a href="tel:+7 (747) 777 86 64">+7 747 777 86 64</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="header-area header-sticky fixed" style="height: 65px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="?page=main"><img style="padding-top: 1%;" src="img/logo/logo-sm.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav>
                                <ul>
                                    <li><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=main">Главная</a></li>
                                    <li><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=about">О нас</a></li>
                                    <li><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=course">Курсы</a></li>
                                    <li><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=event">Мероприятия</a></li>
                                    <li class="hidden-sm"><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=teacher">Команда</a></li>
                                    <li><a style="<?php if($page != "main"){echo "color: #303030;";} ?>" href="?page=contact">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
