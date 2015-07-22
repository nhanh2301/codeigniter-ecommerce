<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $this->load->view('partials/main_sidebar'); ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <?php if (!empty($product->image)) { ?>
                            <div class="view-product">
                                <img src="<?php echo site_url('img.php?src=uploads/'.$product->image.'&w=768'); ?>" alt="<?php echo $product->name.' | '.$general->logo_text; ?>" />
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2><?php echo $product->name; ?></h2>
                            <p>Vizualizari: <?php echo $product->views; ?></p>
                            <img src="/assets/images/product-details/rating.png" alt="" />
                            <span style="display:block">
                                <span style="float:none"><?php echo $product->price; ?> Lei / bucata</span>
                            </span>
                            <span>
                                <label>Contitatea:</label>
                                <input type="text" value="3" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Adauga in cos
                                </button>
                            </span>
                            <p><b>Disponibilitate:</b> <?php echo $product->active ? 'In stoc' : 'Nu este in stoc'; ?></p>
                            <p><b>Brand:</b> Gilette</p>
                        </div>
                    </div>
                </div>

                <div class="category-tab shop-details-tab">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Detalii</a></li>
                            <li><a href="#delivery" data-toggle="tab">Livrare</a></li>
                            <li><a href="#reviews" data-toggle="tab">Comentarii (5)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details">
                            <p style="padding:0 20px 10px 20px"><?php echo $product->description; ?></p>
                        </div>

                        <div class="tab-pane fade" id="delivery" >
                            <p style="padding:0 20px 10px 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nemo quidem reprehenderit veritatis. Accusamus cumque eligendi explicabo itaque iure maiores neque quo? Accusantium adipisci asperiores consequatur dolor ipsum magnam, sequi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid deserunt est fuga id illo in, iste magnam neque nobis non odio quam quasi quisquam reprehenderit similique suscipit tempora voluptatum.</p>
                        </div>

                        <div class="tab-pane fade" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                <br>

                                <div class="add-comment">
                                    <p><b>Adauga un comentariu</b></p>

                                    <form action="#">
										<span>
											<input type="text" placeholder="<?php echo lang('msg_name'); ?>"/>
											<input type="email" placeholder="<?php echo lang('msg_email'); ?>"/>
										</span>
                                        <textarea name="message" placeholder="<?php echo lang('msg_message'); ?>"></textarea>
                                        <b>Rating: </b> <img src="/assets/images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right"><?php echo lang('msg_send'); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <?php if (!empty($recommended_products)) { ?>
                    <div class="recommended_items">
                        <h2 class="title text-center">Produse recomandate</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">

                                    <?php foreach ($recommended_products as $product) { ?>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <a href="<?php echo site_url(url_title($product->name).'-'.$product->id); ?>">
                                                            <img src="<?php echo site_url('img.php?src=uploads/'.$product->image.'&h=130'); ?>" alt="<?php echo $product->name.' | '.$general->logo_text; ?>" />
                                                        </a>
                                                        <h2><?php echo $product->price; ?> Lei</h2>
                                                        <a href="<?php echo site_url(url_title($product->name).'-'.$product->id); ?>"><p><?php echo $product->name; ?></p></a>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>