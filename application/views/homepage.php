<section class="homepage-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $this->load->view('partials/main_sidebar'); ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="row homepage-slider">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1><span>A</span>-nsilvex</h1>
                                        <h2>Produse cosmetice</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Despre noi</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="/assets/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>A</span>-nsilvex</h1>
                                        <h2>Livrare gratuita</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Despre livrare</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="/assets/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>

                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <?php if (!empty($popular_products)) { ?>
                    <div class="features_items">
                        <h2 class="title text-center">Cele mai populare</h2>
                        <?php foreach ($popular_products as $product) { ?>
                            <?php $this->load->view('partials/product', ['product' => $product]); ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>