$('#email').on("blur", function () {
    var email = $(this).val();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/auth.php?id=1&email=" + email,
        dataType: "xml",
        success: function (xml) {
            $(xml).find('response').each(function () {
                var s = document.getElementById("greske").innerHTML;
                if ($(this).html() == '1') {
                    if (s.indexOf("<p>Duplikat emaila</p>") > -1) {
                    }
                    else {
                        document.getElementById("greske").innerHTML += "<p>Duplikat emaila</p>";
                    }
                }
                else {
                    document.getElementById("greske").innerHTML = document.getElementById("greske").innerHTML.replace("<p>Duplikat emaila</p>", "");
                }
            });
        }
    });
});

$('#lozinka').focusout(function () {
    var lozinka = $(this).val();

    var patt = /^.*(?=.{10,})(?=(?:.*?[0-9]){2})(?=.*[a-zA-Z]).*$/;
    var s = document.getElementById("greske").innerHTML;
    if (!patt.test(lozinka) || lozinka.length == 0) {
        if (s.indexOf("<p>Polje lozinka mora imati bar 1 slovo, 2 broja i min 10 duljinu</p>") > -1) {
        }
        else {
            document.getElementById("greske").innerHTML += "<p>Polje lozinka mora imati bar 1 slovo, 2 broja i min 10 duljinu</p>";
        }
    }
    else {
        document.getElementById("greske").innerHTML = document.getElementById("greske").innerHTML.replace("<p>Polje lozinka mora imati bar 1 slovo, 2 broja i min 10 duljinu</p>", "");
    }
});

$('#lozinka_repeat').focusout(function () {
    var lozinka = $(this).val();
    var s = document.getElementById("greske").innerHTML;
    if ($('#lozinka').val() != $(this).val()) {
        if (s.indexOf("<p>Lozinka i provjera lozinke moraju biti jednake</p>") > -1) {
        }
        else {
            document.getElementById("greske").innerHTML += "<p>Lozinka i provjera lozinke moraju biti jednake</p>";
        }
    }
    else {
        document.getElementById("greske").innerHTML = document.getElementById("greske").innerHTML.replace("<p>Lozinka i provjera lozinke moraju biti jednake</p>", "");
    }
});

//Vrijednost = koju vrijednost provjeravamo
//nazivPolja = Naziv polja kojeg provjeravamo(grad,ime,prezime...)
function provjeriPrvoSlovo(vrijednost, nazivPolja, element) {
    var s = document.getElementById("greske").innerHTML;
    //AKO nije popunjena vrijednost, ispisi gresku
    if (vrijednost.length === 0) {
        //Prije nego sto ispises gresku provjeri je li vec ispisana greska,
        //ako je vec ispisana greska, nemoj je ispisati.
        if (s.indexOf("<p>Polje " + nazivPolja + " nema veliko prvo slovo</p>") > -1) {
        }
        else {
            document.getElementById("greske").innerHTML += "<p>Polje " + nazivPolja + " nema veliko prvo slovo</p>";
        }
        return true;
    }
    //Ako je korisnik nesto upisao, provjeri prvo slovo
    prvoSlovo = vrijednost[0];
    if (prvoSlovo !== prvoSlovo.toUpperCase()) {
        //Nadodajemo gresku na prethodni string, ali jedino ako se ta greska vec ne nalazi u stringu greske,
        //inace je ne dodajemo jer ne zelimo duplicirati ispis istih gresaka
        if (s.indexOf("<p>Polje " + nazivPolja + " nema veliko prvo slovo</p>") > -1) {
        }
        else {
            document.getElementById("greske").innerHTML += "<p>Polje " + nazivPolja + " nema veliko prvo slovo</p>";
        }
        return false;
    }
    else {
        document.getElementById("greske").innerHTML = document.getElementById("greske").innerHTML.replace("<p>Polje " + nazivPolja + " nema veliko prvo slovo</p>", "");
        element.classList.remove("wrongInput");
        return true;
    }
}

function provjeriSpol(element) {
    var s = document.getElementById("greske").innerHTML;
    if (document.getElementById("musko").checked
            || document.getElementById("zensko").checked
            || document.getElementById("upitnik").checked) {
        element.classList.remove("wrongInput");
        return true;
    }
    else {
        if (s.indexOf("<p>Spol mora biti odabran</p>") > -1) {
        }
        else {
            document.getElementById("greske").innerHTML += "<p>Spol mora biti odabran</p>";
        }
        return false;
    }
}

var formular = document.getElementById("registracija");

//provjeravamo ime
var elementIme = document.getElementById("ime");
elementIme.addEventListener("keyup", function (e) {
    var ime = document.getElementById("ime").value;
    provjeriPrvoSlovo(ime, "Ime", document.getElementById("ime"));
});
//provjeravamo prezime
var elementPrezime = document.getElementById("prezime");
elementPrezime.addEventListener("keyup", function (e) {
    var prezime = document.getElementById("prezime").value;
    provjeriPrvoSlovo(prezime, "Prezime", document.getElementById("prezime"));
});


//Provjeravamo sve elemente da li su validni
formular.addEventListener("submit", function (e) {

    var ime = document.getElementById("ime").value;
    provjeriPrvoSlovo(ime, "Ime", document.getElementById("ime"));


    var prezime = document.getElementById("prezime").value;
    provjeriPrvoSlovo(prezime, "Prezime", document.getElementById("prezime"));


    provjeriSpol();
    if (document.getElementById("greske").value !== "") {
        e.preventDefault();
    }
}
), false;
 