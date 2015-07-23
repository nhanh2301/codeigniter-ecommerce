<div class="left-sidebar">
    <?php if (!empty($categories)) { ?>
        <h2>Categorii</h2>
        <div class="category-products">
            <?php foreach ($categories as $category) { ?>
                <?php if (!empty($category->products)) { ?>
                    <a href="<?php echo site_url('categorie/'.url_title($category->name).'-'.$category->id); ?>" class="cp-category"><span class="pull-right">(<?php echo $category->products; ?>)</span> <?php echo $category->name; ?></a>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>

    <script language="JavaScript" type="text/javascript" src="http://www.curs.md/ro/curs_provider/F7F7F0/260/595657"></script>

    <div class="m2meteo2_informer">
        <div class="m2meteo_title" style="background: #65AE17;">
            <a target="_blank" title="Meteo în  Chişinău" href="http://meteo2.md/ro/Prognoza_Meteo/Chişinău/Chişinău/">Meteo în  Chişinău</a>
        </div>
        <script language="JavaScript" type="text/javascript" src="http://meteo2.md/configurator/html_informer.php?show_js=1&lang=ro&region=57&location=618426&color=65AE17&title_on=1&color_1=%23ffffff&size=260&cfg_1=1&cfg_3=1&cfg_4=1&cfg_5=1"></script>
    </div></div>
    </div></div>
</div>