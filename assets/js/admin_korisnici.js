function ucitajKorisnike() {
    $('#korisnici').html("");
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=1",
        dataType: "xml",
        success: function (xml) {
            var tablica = '<table id="tablica">\n\
                    <thead>\n\
                    <tr>\n\
                    <th>ID</th><th>Tip</th><th>Ime i prezime</th><th>Email</th><th>Status</th><th>News</th><th></th><th></th><th></th><th>Tip - promjena</th>\n\
                    </tr></thead><tbody>';
            var array = [];
            var i = 0;
            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    tablica += '<tr>';
                    tablica += '<td>' + $(this).find('idkorisnik').html() + '</td>';
                    tablica += '<td>' + $(this).find('tip').html() + '</td>';
                    tablica += '<td>' + $(this).find('ime').html() + ' ' + $(this).find('prezime').html() + '</td>';
                    tablica += '<td>' + $(this).find('email').html() + '</td>';
                    tablica += '<td>' + $(this).find('status').html() + '</td>';
                    tablica += '<td>' + $(this).find('newsletter').html() + '</td>';
                    var id = $(this).find('idkorisnik').html();
                    if ($(this).find('status').html() == '2') {
                        tablica += '<td><a href="#" id="o_' + id + '" >Odblokiraj</a></td>';
                    }
                    else {
                        tablica += '<td><a href="#" id="b_' + id + '">Blokiraj</a></td>';
                    }
                    tablica += '<td><a href="#" id="br_' + id + '">Briši</a></td>';
                    tablica += '<td><a href="admin_uredi.php?id=' + id + '" id="u_' + id + '">Uredi</a></td>';
                    tablica += '<td><a href="#" id="a_' + id + '">A</a>/<a href="#" id="m_' + id + '">M</a>/<a href="#" id="k_' + id + '">K</a></td>';
                    tablica += '</tr>';

                    array[i++] = id;

                });


                tablica += '</tbody></table><script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>';
                $('#korisnici').html(tablica);

                $.ajax({
                    type: "GET",
                    url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=18",
                    dataType: "json",
                    success: function (xml) {
                        $('#tablica').dataTable({pageLength: xml['str']["0"]});
                    }});
                for (var j = 0; j < i; j++) {
                    id = array[j];
                    $('#b_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=3&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });

                    $('#o_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=4&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });

                    $('#br_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(3, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=2&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });

                    $('#a_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=5&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });

                    $('#m_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=6&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });

                    $('#k_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=7&id_user=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajKorisnike();
                            }
                        });
                    });
                }
            });

        }
    });
}

//Kada se ucita prozor, pozovi funkciju ucitaj korisnike
$(window).ready(function () {
    ucitajKorisnike();
});