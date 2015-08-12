<!-- Main -->
<br/>
<article id="main">
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <div class="row 50%">
                <div class="12u 12u(mobile)">
                    <form action="admin_postavke.php?id=1" method="POST">
                        Pomak u broju sati
                        <input type="text" size="10" name="pomak"><br/>
                        <input type="submit"/>
                    </form> 
                </div>
                <div class="12u 12u(mobile)">
                    <form action="admin_postavke.php?id=2" method="POST">
                        Broj redova po stranici
                        <input type="text" size="10" name="stranice"><br/>
                        <input type="submit"/>
                    </form> 
                </div>
            </div>
        </div>
    </section>
</article>
<script>
    $('#header').css('background', 'black');
</script>