<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Prijava</h2>
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
            <form method="POST" action='login.php'>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="email" name="email" value="{$email}" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" name="password" placeholder="Lozinka" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Zapamti
                        <input type="checkbox" name="zapamti" {if isset($zapamti)}checked="checked"{/if}/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <a href="zaboravljena_lozinka.php">Zaboravljena lozinka</a>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Prijava" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </section>

</article>

<script src="assets/js/jquery.min.js"></script>
<script>
    $('#header').css('background', 'black');
</script>