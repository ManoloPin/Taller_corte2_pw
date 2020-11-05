function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/Taller_corte2_pw/servidor/index.php?req="+document.getElementById("currencie").value, true);
  xhttp.send();
}
