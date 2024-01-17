// alert('haa');
var search = function () {
    var text = document.getElementById("textSearch").value;
    var reponse = new XMLHttpRequest();
    reponse.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Mydiv").innerHTML = this.responseText;
            // alert('haa');
      }
    };

    reponse.open("GET", "?action=search_page&text=" + text, true);
    reponse.send();
};