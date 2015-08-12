{php}
    if(!isset($_SESSION)) {
     session_start();
}
{/php}
<!DOCTYPE HTML>
<!--
        Twenty by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Vodič za preživljavanje</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables_themeroller.css" />
        <script src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="index">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="index.php">Vodič <span>za preživljavanje</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="dokumentacija.html">Dokumentacija</a></li>
                        <li><a href="o_autoru.html">O korisniku</a></li>
                            {if isset($smarty.session.email)}
                            <li><a href="korisnik_podrucja.php">Područja</a></li>
                                {if $smarty.session.tip == 1}
                                <li class="submenu">
                                    <a href="#">Admin</a>
                                    <ul>
                                        <li><a href="admin_korisnici.php">Korisnici</a></li>
                                        <li><a href="admin_podrucja.php">Područja</a></li>
                                        <li><a href="admin_log.php">Log</a></li>
                                        <li><a href="admin_statistika.php">Statistika</a></li>
                                        <li><a href="admin_postavke.php">Postavke sustava</a></li>
                                    </ul>
                                </li>
                            {/if}
                            <li><a href="logout.php" class="button special">Log Out</a></li>
                            {else}
                            <li><a href="signup.php" class="button special">Sign Up</a></li>
                            <li><a href="login.php" class="button special">Log In</a></li>
                            {/if}
                    </ul>
                </nav>
            </header>