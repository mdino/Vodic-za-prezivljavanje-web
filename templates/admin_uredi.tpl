<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Uredi korisnika</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <form method="POST" action="admin_uredi.php?id={$id}" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <center>{$id}</center>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input id="email" type="email" value="{$email}" name="Email" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="ime" value="{$ime}" id="ime" placeholder="Ime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="prezime" value="{$prezime}" id="prezime" placeholder="Prezime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Newsletter
                        <input type="checkbox" name="newsletter" checked="checked"/>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Uredi" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </section>

</article>

<script src="assets/js/jquery.min.js"></script>
<!-- <script src="assets/js/signup.js"></script> -->
<script>
    $('#header').css('background', 'black');
</script>
<style>
    #recaptcha_area { margin: auto}
</style>