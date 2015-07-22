<div class="row">
    <div class="col-lg-12">
        <form method="post" action="<?php echo site_url('admin/categories/save'); ?>">
            <input type="hidden" name="id" value="<?php echo !empty($category) ? $category->id : ''; ?>">
            <section class="panel">
                <header class="panel-heading"><span class="h4"><?php echo !empty($category) ? $category->name : 'Noua categorie'; ?></span></header>
                <div class="panel-body"><p class="text-muted"></p>
                    <div class="form-group">
                        <label>Nume</label>
                        <input type="text" name="name" class="form-control" value="<?php echo !empty($category) ? $category->name : ''; ?>" placeholder="ex: Detergenti, Cadouri">
                    </div>
                </div>
                <footer class="panel-footer text-right bg-light lter">
                    <a href="<?php echo site_url('admin/categories'); ?>" class="btn btn-s-xs">Inapoi</a>
                    <?php if (!empty($category)) { ?>
                        <a href="<?php echo site_url('admin/categories/delete/'.$category->id); ?>" class="confirm btn btn-danger btn-s-xs">Sterge</a>
                    <?php } ?>
                    <button type="submit" class="btn btn-success btn-s-xs">Salveaza</button>
                </footer>
            </section>
        </form>
    </div>
</div>