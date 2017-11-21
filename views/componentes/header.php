<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="navbar-header container">
        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <a href="<?= RAIZSITE ?>">
                <img src="<?= RAIZSITE ?>/imagens/ferraz-advocacia.png" class="img-mobile">
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bg-preto"></span>
                <span class="icon-bar bg-preto"></span>
                <span class="icon-bar bg-preto"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse header-bg" id="example-navbar-collapse">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav navbar-nav padding-zero Medium branco-fonte">
                <li>
                    <a href="<?= RAIZSITE ?>" class="padding-zero"><img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive hidden-xs"></a>
                </li>
                <li><a href="<?= RAIZSITE ?>">HOME</a></li>
                <li class="dropdown">
                    <a>SERVIÇOS</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= RAIZSITE ?>"><span class="preto-fonte Uppercase">SERVIÇOS</span></a></li>
                    </ul>
                </li>
                <li><a href="<?= RAIZSITE ?>">BLOG</a></li>
                <li><a href="<?= RAIZSITE ?>">SOBRE</a></li>
                <li><a href="<?= RAIZSITE ?>">CONTATO</a></li>
            </ul>
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="btn-group navbar-social">
                    <div class="btn-group grupo-redes">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        
                        <a href="#" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script type="text/javascript">
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>