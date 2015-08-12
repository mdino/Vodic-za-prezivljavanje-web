function ucitajLog() {
    $('#korisnici').html("");
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=10",
        dataType: "xml",
        success: function (xml) {
            var tablica = '<table id="tablica">\n\
                    <thead>\n\
                    <tr>\n\
                    <th>ID</th><th>Text</th><th>Vrijeme</th>\n\
                    </tr></thead><tbody>';
            var array = [];
            var i = 0;
            $(xml).find('logovi').each(function () {

                $(this).find('log').each(function () {
                    tablica += '<tr>';
                    tablica += '<td>' + $(this).find('id').html() + '</td>';
                    tablica += '<td>' + $(this).find('text').html() + '</td>';
                    tablica += '<td>' + $(this).find('vrijeme').html() + '</td></tr>';
                });


                tablica += '</tbody></table><script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>';
                $('#log').html(tablica);
                $.ajax({
                    type: "GET",
                    url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=18",
                    dataType: "json",
                    success: function (xml) {
                        $('#tablica').dataTable({pageLength: xml['str']["0"]});
                    }});

            });

        }
    });
}

//Kada se ucita prozor, pozovi funkciju ucitaj korisnike
$(window).ready(function () {
    ucitajLog();
});