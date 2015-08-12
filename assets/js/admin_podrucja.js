function ucitajPodrucja() {
    $('#podrucja').html("");
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=8",
        dataType: "xml",
        success: function (xml) {
            var tablica = '<table id="tablica">\n\
                    <thead>\n\
                    <tr>\n\
                    <th>ID</th><th>Naiv</th><th>Opis</th><th>Slika</th><th></th>\n\
                    </tr></thead><tbody>';
            var array = [];
            var i = 0;
            $(xml).find('podrucja').each(function () {

                $(this).find('podrucje').each(function () {
                    var id = $(this).find('idpodrucje').html();
                    tablica += '<tr>';
                    tablica += '<td>' + $(this).find('idpodrucje').html() + '</td>';
                    tablica += '<td>' + $(this).find('naziv').html() + '</td>';
                    tablica += '<td>' + $(this).find('opis').html() + '</td>';
                    tablica += '<td><img src="img/podrucja/' + id + '/' + id + '.jpg" width="75" height="45"/></td>';
                    tablica += '<td><a href="#" id="b_' + id + '">Briši</a> - ';
                    tablica += '<a href="admin_podrucja_moderatori.php?id=' + id + '" id="m_' + id + '">Moderatori</a> - ';
                    tablica += '<a href="admin_podrucja_uredi.php?id=' + id + '" id="u_' + id + '">Uredi</a> </td>';
                    tablica += '</tr>';

                    array[i++] = id;

                });


                tablica += '</tbody></table><script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>';
                $('#podrucja').html("");

                $('#podrucja').html(tablica);
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
                        var idPodrucje = $(this).attr('id');
                        idPodrucje = idPodrucje.substring(2, idPodrucje.length);
                        $.ajax({
                            type: "GET",
                            url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=9&id_podrucje=" + idPodrucje,
                            dataType: "xml",
                            success: function (xml) {
                                ucitajPodrucja();
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
    ucitajPodrucja();
});