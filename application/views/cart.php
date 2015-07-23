<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('/'); ?>">Acasa</a></li>
                <li class="active">Cosul tau</li>
            </ol>
        </div>
        <?php if (!empty($products)) { ?>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Produs</td>
                        <td class="description"></td>
                        <td class="price">Pret</td>
                        <td class="quantity">Cantitate</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) { ?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="/assets/images/cart/three.png" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $product->name; ?></a></h4>

                                <p>Vizualizari: <?php echo $product->views; ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?php echo $product->price; ?> Lei</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                           autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo $product->price; ?> Lei</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Ultima etapa. Cum doriti primirea comenzii?</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores dolorem doloremque dolores
                dolorum earum facilis hic in, ipsam perferendis possimus quisquam rem, sit, suscipit velit. At enim odio
                quae?</p>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Email</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Telefon</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Mesaj</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field zip-field">
                            <label>Telefon * :</label>
                            <input type="text">
                        </li>
                        <li class="single_field zip-field">
                            <label>Email * :</label>
                            <input type="text">
                        </li>
                        <li class="single_field zip-field">
                            <label>Adresa * :</label>
                            <input type="text">
                        </li>
                    </ul>
                    <div style="margin: 20px 25px 15px 40px;">
                        <label>Mesaj :</label>
                        <textarea></textarea>
                    </div>
                    <a class="btn btn-default check_out" href="">Trimite comanda</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="total_area">
                    <ul>
                        <li>Telefon <span><?php echo $general->telephone; ?></span></li>
                        <li>Mobil <span><?php echo $general->mobile; ?></span></li>
                        <li>Email <span><?php echo $general->email; ?></span></li>
                        <li>Livrare <span>Gratis de la 200 Lei</span></li>
                        <li>Total <span>240 lei</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->