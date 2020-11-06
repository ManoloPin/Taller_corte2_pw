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

function loadDoc2() {
  var xhttp2 = new XMLHttpRequest();
  xhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp2").innerHTML =this.responseText;
    }
  };
  xhttp2.open("GET", "http://localhost/Taller_corte2_pw/servidor/index.php?req2="+document.getElementById("currencie2").value, true);
  xhttp2.send();
}

function loadDoc3() {
  var xhttp3 = new XMLHttpRequest();
  xhttp3.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp3").innerHTML =this.responseText;
    }
  };
  xhttp3.open("GET", "http://localhost/Taller_corte2_pw/servidor/index.php?req3=tickers", true);
  xhttp3.send();
}

function loadDoc4() {
  var xhttp4 = new XMLHttpRequest();
  xhttp4.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp4").innerHTML =this.responseText;
    }
  };
  xhttp4.open("GET", "http://localhost/Taller_corte2_pw/servidor/index.php?req4=tickers", true);
  xhttp4.send();
}