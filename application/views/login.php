<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Logare</h2>
                    <form action="<?php echo site_url('user/login'); ?>" method="post">
                        <input type="email" name="email" placeholder="Email" />
                        <input type="password" name="password" placeholder="Parola" />
							<span>
								<input type="checkbox" name="remember" value="1" class="checkbox">
								Tine-ma activat
							</span>
                        <button type="submit" class="btn btn-default">Intra</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">Ori</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Creare utilizator!</h2>
                    <form action="<?php echo site_url('user/register'); ?>" method="post">
                        <input type="text" name="name" placeholder="Nume"/>
                        <input type="email" name="email" placeholder="Email"/>
                        <input type="text" name="telephone" placeholder="Telefon"/>
                        <input type="text" name="address" placeholder="Adresa"/>
                        <input type="password" name="password" placeholder="Parola"/>
                        <button type="submit" class="btn btn-default">Inregistreaza-te</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>