<!-- Banner -->
<section id="banner">

    <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
    -->
    <div class="inner">

        <header>
            <h2>Vodič za preživljavanje</h2>
        </header>
        <p>
            Pregled i učenje tehnika <br/>
            preživljavanja u različitim<br/>
            područjima.
        </p>
        <footer>
            <ul class="buttons vertical">
                <li><a href="#podrucja" class="button fit scrolly">Pregled područja</a></li>
            </ul>
        </footer>

    </div>

</section>

<!-- Main -->
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='podrucja'>

        <header class="major">
            <h2>Područja</strong></h2>
        </header>
        {assign var=podrucja_count value=$podrucja|@count} 
        
        {for $i=2 to $podrucja_count+1}
              {if $i%2==0}
                  <div class="row">
              {/if}
              <div class="6u 12u(narrower)">
                <section>
                    <a href="#" class="image featured"><img src="img/podrucja/{$podrucja[$i][0]}/{$podrucja[$i][0]}.jpg" width="486" height="215" /></a>
                    <header>
                        <h3>{$podrucja[$i][2]}</h3>
                    </header>
                    <p>{$podrucja[$i][3]}</p>
                    <a href="podrucje.php?id={$podrucja[$i][0]}" class="button">Saznajte više</a>
                </section>
            </div>
            {if $i%2!=0}
                </div>
            {/if}
        {/for}
    </section>

</article>
