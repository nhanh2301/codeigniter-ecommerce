<div class="row">
    <div class="col-lg-12">
        <form method="post" action="<?php echo site_url('admin/pages/save'); ?>">
            <input type="hidden" name="id" value="<?php echo !empty($page) ? $page->id : ''; ?>"/>

            <section class="panel">
                <header class="panel-heading"><span
                        class="h4"><?php echo !empty($page) ? $page->title : 'Pagina noua'; ?></span></header>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Titlu *</label>
                        <input name="title" type="text" value="<?php echo !empty($page) ? $page->title : ''; ?>"
                               required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Imagine</label>
                        <input name="file" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="content" class="form-control" required
                                  rows="10"><?php echo !empty($page) ? $page->content : ''; ?></textarea>
                    </div>
                </div>
                <footer class="panel-footer text-right bg-light lter">
                    <a href="<?php echo site_url('admin/pages'); ?>" class="btn btn-s-xs">Inapoi</a>
                    <button type="submit" class="btn btn-success btn-s-xs">Salveaza</button>
                </footer>
            </section>
        </form>
    </div>
</div>