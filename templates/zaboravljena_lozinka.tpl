<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Zaboravljena lozinka</h2>
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
            <form method="POST" action='zaboravljena_lozinka.php'>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Generiraj lozinku" /></li>
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