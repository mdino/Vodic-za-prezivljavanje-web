function ucitajModeratore() {
    $('#podrucjaModeratori').html("");
    var podrucje_id = $('#id_podrucja').html();
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=13&podrucje=" + podrucje_id,
        dataType: "xml",
        success: function (xml) {
            var tablica = '<table id="tablica1">\n\
                    <thead>\n\
                    <tr>\n\
                    <th>ID</th><th>Ime i prezime</th><th>Email</th><th>Akcija</th>\n\
                    </tr></thead><tbody>';
            var array = [];
            var i = 0;
            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    tablica += '<tr>';
                    var id = $(this).find('idkorisnik').html();
                    tablica += '<td>' + $(this).find('idkorisnik').html() + '</td>';
                    tablica += '<td>' + $(this).find('ime').html() + ' ' + $(this).find('prezime').html() + '</td>';
                    tablica += '<td>' + $(this).find('email').html() + '</td>';
                    tablica += '<td><a href="#" id="b_' + id + '">Oduzmi</a></td>';
                    tablica += '</tr>';

                    array[i++] = id;

                });


                tablica += '</tbody></table><script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>';
                $('#podrucjaModeratori').html(tablica);

                $.ajax({
                    type: "GET",
                    url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=18",
                    dataType: "json",
                    success: function (xml) {
                        $('#tablica1').dataTable({pageLength: xml['str']["0"]});
                    }});

                for (var j = 0; j < i; j++) {
                    id = array[j];
                    $('#b_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=12&podrucje=" + podrucje_id + "&moderator=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajNeModeratore();
                                ucitajModeratore();
                            }
                        });
                    });
                }
            });

        }
    });
}

function ucitajNeModeratore() {
    $('#podrucjaNeModeratori').html("");
    var podrucje_id = $('#id_podrucja').html();
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=14&podrucje=" + podrucje_id,
        dataType: "xml",
        success: function (xml) {
            var tablica = '<table id="tablica2">\n\
                    <thead>\n\
                    <tr>\n\
                    <th>ID</th><th>Ime i prezime</th><th>Email</th><th>Akcija</th>\n\
                    </tr></thead><tbody>';
            var array = [];
            var i = 0;
            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    var id = $(this).find('idkorisnik').html();
                    tablica += '<tr>';
                    tablica += '<td>' + $(this).find('idkorisnik').html() + '</td>';
                    tablica += '<td>' + $(this).find('ime').html() + ' ' + $(this).find('prezime').html() + '</td>';
                    tablica += '<td>' + $(this).find('email').html() + '</td>';
                    tablica += '<td><a href="#" id="d_' + id + '">Dodaj</a></td>';
                    tablica += '</tr>';

                    array[i++] = id;

                });


                tablica += '</tbody></table><script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>';
                $('#podrucjaNeModeratori').html(tablica);
                $.ajax({
                    type: "GET",
                    url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=18",
                    dataType: "json",
                    success: function (xml) {
                        $('#tablica2').dataTable({pageLength: xml['str']["0"]});
                    }});
                for (var j = 0; j < i; j++) {
                    id = array[j];
                    $('#d_' + id).click(function () {
                        var idUser = $(this).attr('id');
                        idUser = idUser.substring(2, idUser.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=11&podrucje=" + podrucje_id + "&moderator=" + idUser,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajNeModeratore();
                                ucitajModeratore();
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
    ucitajModeratore();
    ucitajNeModeratore();
});