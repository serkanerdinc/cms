<!--Left navigation section start-->
<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="/admin/assets/images/userimage/avatar1-80.png" alt=""/>

        <div class="user-online-status"><span class="user-status is-online  "></span></div>
    </div>
    <!--<ul class="social-icon">
        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li>
    </ul>-->
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>CMS Menü</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>

        <div class="clearfix"></div>
    </div>
    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    <ul class="mainNav">
        <li {%if ($nav1=="paneladmin")%}class="active"{%/if%}>
            <a {%if ($nav1=="paneladmin")%}class="active"{%/if%} href="/paneladmin">
                <i class="fa fa-dashboard"></i> <span>Kontrol Paneli</span>
            </a>
        </li>
        <li {%if ($nav1=="page")%}class="active"{%/if%}>
            <a href="#">
                <i class="fa fa-list-alt"></i> <span>Sayfalar</span>
            </a>
            <ul>
                <li><a href="/paneladmin/page/add">Sayfa Ekle </a></li>
                <li><a href="/paneladmin/page/lists">Tüm Sayfalar </a></li>
                <li><a href="/paneladmin/page/terms/category" {%if ($nav2=="category")%}class="active"{%/if%}>Kategoriler </a></li>
                <li><a href="/paneladmin/page/terms/tag" {%if ($nav2=="tag")%}class="active"{%/if%}>Etiketler </a></li>
                <li><a href="/paneladmin/page/menu" {%if ($nav2=="menu")%}class="active"{%/if%}>Menüler </a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-camera"></i> <span>Ortam</span>
            </a>
            <ul>
                <li><a href="#">Resimler </a></li>
                <li><a href="#">Kataloglar </a></li>
                <li><a href="#">Galeriler </a></li>
                <li><a href="#">Yeni Ortam Ekle </a></li>

            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-trophy"></i>
                <span>Slider</span>
            </a>
            <ul>
                <li><a href="#">Tüm Sliderlar</a></li>
                <li><a href="#">Yeni Ekle</a></li>

            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-gears"></i>
                <span>Genel Ayarlar</span>
            </a>
            <ul>
                <li><a href="#">Genel Ayarlar</a></li>
                <li><a href="#">İletişim Bilgileri</a></li>
                <li><a href="#">Sosyal Hesaplar</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-users"></i> <span>Yönetici Hesapları</span>
            </a>
        </li>
    </ul>
    <!--Left navigation end-->
</section>
<!--Left navigation section end-->