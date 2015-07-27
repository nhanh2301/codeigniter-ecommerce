<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <span class="h4">Comenzi</span>
            </header>
            <table class="table m-b-none text-sm">
                <thead>
                <tr>
                    <th>Produse</th>
                    <th>Total</th>
                    <th>Date de contact</th>
                    <th>Mesaj</th>
                    <th>Data comenzii</th>
                    <th width="70"></th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($orders)) { ?>
                    <?php foreach ($orders as $order) { ?>
                        <tr class="alert-<?php echo $order->processed == Order_model::PROCESSED_NEW ? 'warning' : 'success'; ?>">
                            <td>
                                <?php foreach ($order->order_array['products'] as $product) { ?>
                                    <?php echo $product['name'] . ' x' . $product['quantity'] . ' = ' . $product['total'] . ' Lei'; ?>
                                    <br>
                                <?php } ?>
                            </td>
                            <td><?php echo $order->order_array['total']; ?> Lei</td>
                            <td>
                                <?php echo !empty($order->order_array['name']) ? 'Nume: ' . $order->order_array['name'] . '<br>' : ''; ?>
                                <?php echo !empty($order->order_array['email']) ? 'Email: ' . $order->order_array['email'] . '<br>' : ''; ?>
                                <?php echo !empty($order->order_array['telephone']) ? 'Telefon: ' . $order->order_array['telephone'] . '<br>' : ''; ?>
                                <?php echo !empty($order->order_array['address']) ? 'Adresa: ' . $order->order_array['address'] . '<br>' : ''; ?>
                            </td>
                            <td><?php echo $order->order_array['message']; ?></td>
                            <td><?php echo date('H:i, d M Y', strtotime($order->date)); ?></td>
                            <td>
                                <button type="submit" name="processed" class="btn btn-success"
                                        value="<?php echo Order_model::PROCESSED_COMPLETED; ?>">Finisare
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>