<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Registracija</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">

        <div class="row 50%">
            <div  id="greske" class="12u 12u(mobile)">
                {if isset($greska)}
                    {$greska}
                {/if}
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <form method="POST" action="" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input id="email" type="email" name="Email" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" id="lozinka" name="password" placeholder="Lozinka"/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" name="password_repeat" id="lozinka_repeat" placeholder="Ponovi lozinku" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="ime" id="ime" placeholder="Ime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="prezime" id="prezime" placeholder="Prezime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Musko
                        <input type="radio" id="musko" name="sex" value="male" >
                        <label for="zensko">Zensko</label>
                        <input type="radio" id="zensko"  name="sex" value="female">
                        <label for="upitnik">?</label>
                        <input type="radio" id="upitnik"  name="sex" value="upitnik">
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Newsletter
                        <input type="checkbox" name="newsletter" checked="checked"/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        {php}
                        $publickey = "6LcsZgYTAAAAAPSjtt_bzXkYpFr74P1q7NkPKtOT";
                        echo recaptcha_get_html($publickey);
                        {/php}
                    </div>
                </div> 
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Registracija" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </section>

</article>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/signup.js"></script>
<script>
    $('#header').css('background', 'black');
</script>
<style>
    #recaptcha_area { margin: auto}
</style>