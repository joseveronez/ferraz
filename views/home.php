<style>
    .banner-home {background-image: url(<?= RAIZSITE ?>/imagens/advogado.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%; height: 93vh;}
</style>
<div class="owl-carousel margem-header-home" id="owl">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  padding-zero banner-home branco-fonte">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT30p">
                <h1 class="size60 Light">Ferraz Cicarelli</h1>
                <p class="size18">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Suspendisse aliquam vel velit sollicitudin porta.Suspendisse tincidunt nibh.</p>
                <a role="button" href="" class="btn btn-home MarginT7p">LOREM IPSUM</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero branco-fonte">
    <div class="container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?= RAIZSITE ?>/imagens/teste.png" class="img-responsive" >
        </div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        });
</script>