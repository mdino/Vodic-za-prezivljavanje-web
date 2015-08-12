<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Uredi podrucja</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <form method="POST" enctype="multipart/form-data"  action="admin_podrucja_uredi.php?id={$id}" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <center>{$id}</center>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Naziv <br/><input id="naziv" type="naziv" value="{$naziv}" name="Naziv" placeholder="Naziv" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Opis <textarea  name="Opis" id="Opis" placeholder="Opis" > {$opis} </textarea>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Slika <br/> <input type="file" name="fileToUpload" id="fileToUpload"  />
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