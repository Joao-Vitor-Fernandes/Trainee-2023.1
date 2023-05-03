var modal_edit = document.getElementById("myModal");
var modal_delete = document.getElementById("myModal-delete");

var btn_edit = document.getElementById("myBtn-edit");
var btn_delete = document.getElementById("myBtn-delete");

var span = document.getElementsByClassName("close")[0];
var span_delete = document.getElementsByClassName("close-delete")[0];


btn_edit.onclick = function() {
  modal_edit.style.display = "block";
}
btn_delete.onclick = function() {
    modal_delete.style.display = "block";
}

span.onclick = function() {
  modal_edit.style.display = "none";
}
span_delete.onclick = function() {
    modal_delete.style.display = "none";
  }

window.onclick = function(event) {
  if (event.target == modal_edit) {
    modal_edit.style.display = "none";
  }
  if (event.target == modal_delete) {
    modal_delete.style.display = "none";
  }
}
