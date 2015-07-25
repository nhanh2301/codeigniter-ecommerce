<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $this->load->view('partials/main_sidebar'); ?>
            </div>

            <div class="col-sm-9 padding-right">
                <?php if (!empty($products)) { ?>
                    <div class="features_items">
                        <h2 class="title text-center">Features Items</h2>
                        <?php foreach ($products as $product) { ?>
                            <?php $this->load->view('partials/product', ['product' => $product]); ?>
                        <?php } ?>
                        <div class="clearfix"></div>
                        <?php echo $links; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>