function showAliment(id , type) {
    Elements = "";
    switch ( type ) {
        case 1 : Elements = "PetitD";
        break;

        case 2 : Elements = "Dejeuner";
            break;

        case 3 : Elements = "Collation";
            break;

        case 4 : Elements = "Diner";
            break;
    }

    if (id == "") {
        document.getElementById(Elements).innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(Elements).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/getaliment/id="+ id + "/type=" + type ,true);
        xmlhttp.send();
    }
}

function actualiserMenu(type , nom , nbr) {
        if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("menu").innerHTML = this.responseText;
                }
            };

        xmlhttp.open("GET","/actumenu/type=" + type + "/nom=" + nom + "/nbr=" + nbr,true);
        xmlhttp.send();

}