
function ajaxCall(method,url,dest) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById(dest).innerHTML = this.responseText;
      }
    };
    xhttp.open(method,url, true);
    xhttp.send();
  }

function loader(url){
     ajaxCall('POST',url,'ajax');
}

