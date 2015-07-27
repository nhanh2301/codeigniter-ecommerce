<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $this->load->view('partials/main_sidebar'); ?>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Pagina</h2>

                    <h3><?php echo $page->title; ?></h3>

                    <div class="single-blog-post">
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-clock-o"></i> <?php echo date('H : i', strtotime($page->date)); ?>
                                </li>
                                <li><i class="fa fa-calendar"></i> <?php echo date('d M, Y', strtotime($page->date)); ?>
                                </li>
                            </ul>
                        </div>

                        <?php if (!empty($page->image)) { ?>
                            <img src="" alt=""/>
                        <?php } ?>

                        <p><?php echo nl2br($page->content); ?><p>
                    </div>
                </div>

                <div class="response-area">
                    <h2>3 Comentarii</h2>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-body">
                                <ul class="sinlge-post-meta">
                                    <li><i class="fa fa-user"></i>Janis Gallagher</li>
                                    <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="replay-box">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Lasa un comentariu</h2>

                            <form>
                                <div class="blank-arrow">
                                    <label>Nume</label>
                                </div>
                                <span>*</span>
                                <input type="text">

                                <div class="blank-arrow">
                                    <label>Email</label>
                                </div>
                                <span>*</span>
                                <input type="text">
                            </form>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-area">
                                <div class="blank-arrow">
                                    <label>Mesajul tau</label>
                                </div>
                                <span>*</span>
                                <textarea name="message" rows="5"></textarea>
                                <a class="btn btn-primary" href="">Comenteaza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>