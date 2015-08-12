<!-- Main -->
<br/>
<article id="main">
    <!-- Three -->
    <header class="special container">
        <h2>Moderatori područja <div id="id_podrucja">{$id}</div> {$naziv}</h2>
    </header>

    <!-- Three -->
    <section class="wrapper style3 container special " >

        <div class="row 100%">
            <div class="12u 12u(mobile)" >
                MODERATORI<br/><br/>
                <div id='podrucjaModeratori'>

                </div>
            </div>
            </div>
        <div class="row 100%">
            <div class="12u 12u(mobile)">
               NE - MODERATORI<br/><br/>
                <div id='podrucjaNeModeratori'>

                </div>
            </div>
        </div>
    </section>

</article>

<script src="assets/js/jquery.dataTables.js"></script>
<script src="assets/js/admin_podrucja_moderatori.js"></script>
<script>
    $('#header').css('background', 'black');
</script>