<footer id="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Categorii populare</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Absorbante</a></li>
                            <li><a href="#">Servetele umede</a></li>
                            <li><a href="#">Detergenti</a></li>
                            <li><a href="#">Cadouri</a></li>
                            <li><a href="#">Scutece</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Produse populare</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Servetele umede</a></li>
                            <li><a href="#">Scutece</a></li>
                            <li><a href="#">Detergenti</a></li>
                            <li><a href="#">Absorbante</a></li>
                            <li><a href="#">Cadouri</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Produse noi</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Detergenti</a></li>
                            <li><a href="#">Absorbante</a></li>
                            <li><a href="#">Servetele umede</a></li>
                            <li><a href="#">Scutece</a></li>
                            <li><a href="#">Cadouri</a></li>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($general->about)) { ?>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Despre Ansilvex</h2>

                            <p><?php echo $general->about; ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">
                    © <?php echo date('Y', time()); ?> <?php echo !empty($general->logo_text) ? $general->logo_text : ''; ?>
                    .</p>
            </div>
        </div>
    </div>
</footer>


<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery.cookie.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/assets/js/gmaps.js"></script>
<script src="/assets/js/contact.js"></script>
<script src="/assets/js/jquery.scrollUp.min.js"></script>
<script src="/assets/js/price-range.js"></script>
<script src="/assets/js/jquery.prettyPhoto.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>