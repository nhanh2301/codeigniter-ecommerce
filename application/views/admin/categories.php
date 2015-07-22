<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <span class="h4">Cateogrii</span>
                <a class="btn btn-xs btn-success pull-right" href="<?php echo site_url('admin/categories/create'); ?>">Adauga</a>
            </header>

            <div class="panel-body">
                <?php if (!empty($categories)) { ?>
                    <table class="table m-b-none text-sm">
                        <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Produse</th>
                            <th>Data adaugata</th>
                            <th width="70"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category) { ?>
                                <tr>
                                    <td><?php echo $category->name; ?></td>
                                    <td><a href="#">N/A</a></td>
                                    <td><?php echo date('d M Y', strtotime($category->date)); ?></td>
                                    <td><a href="<?php echo site_url('admin/categories/edit/'.$category->id); ?>" class="btn btn-xs btn-info">Editeaza</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="alert alert-warning">
                        <p>La moment nu sunt cateogorii.</p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</div>