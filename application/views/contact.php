<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">Contacteaza-<strong>ne</strong></h2>

                <div id="gmap" class="contact-map" data-lat="<?php echo $general->lat; ?>"
                     data-long="<?php echo $general->long; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Trimite un mesaj</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post"
                          action="<?php echo site_url('contact'); ?>">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Nume">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                      placeholder="Mesajul tau"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Trimite">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Date de contact</h2>
                    <address>
                        <?php if (!empty($general->address)) { ?>
                            <p>Adresa: <span><?php echo $general->address; ?></span></p>
                        <?php } ?>

                        <?php if (!empty($general->telephone)) { ?>
                            <p>Telefon: <span><?php echo $general->telephone; ?></span></p>
                        <?php } ?>

                        <?php if (!empty($general->mobile)) { ?>
                            <p>Mobil: <span><?php echo $general->mobile; ?></span></p>
                        <?php } ?>

                        <?php if (!empty($general->email)) { ?>
                            <p>Email: <span><?php echo $general->email; ?></span></p>
                        <?php } ?>

                        <?php if (!empty($general->delivery)) { ?>
                            <p>Livrare: <span><?php echo $general->delivery; ?></span></p>
                        <?php } ?>
                    </address>
                    <?php if (!empty($general->link_facebook) || !empty($general->link_google) || !empty($general->link_linkedin)) { ?>
                    <div class="social-networks">
                        <h2 class="title text-center">Social</h2>
                        <ul>
                            <?php if (!empty($general->link_facebook)) { ?>
                                <li>
                                    <a href="<?php echo $general->link_facebook; ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                            <?php } ?>
                            <?php if (!empty($general->link_google)) { ?>
                                <li>
                                    <a href="<?php echo $general->link_google; ?>"><i class="fa fa-google-plus"></i></a>
                                </li>
                            <?php } ?>
                            <?php if (!empty($general->link_linkedin)) { ?>
                                <li>
                                    <a href="<?php echo $general->link_linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>