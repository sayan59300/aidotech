/**
 * fonction qui affiche ou cache l'élément en paramètre
 * @param {type} field
 * @returns {undefined}
 */
function display(field) {
  var element = document.getElementById(field);
  if (element.style.display === "none") {
    element.style.display = "";
  } else {
    element.style.display = "none";
  }
}