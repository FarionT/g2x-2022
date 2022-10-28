var modal = document.getElementById("myModal");

var btn = document.getElementById("btn_voting");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
  document.getElementById("msg").innerHTML = "";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.getElementById("msg").innerHTML = "";
  }
}