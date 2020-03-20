// opdracht 108 werkt niet.

function formcheck(thisForm) {
    var postcode = thisForm.postcode.value;
    for (var i = 0; i < postcode.lenght; i++) {
        var c = postcode.charAt(i);
        if( c == " " ) {
            alert("Postcode mag geen spaties bevatten");
            thisForm.postcode.focus();
            return false;
        }
        
    }
}