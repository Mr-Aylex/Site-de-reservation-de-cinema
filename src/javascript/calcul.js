


function calcul(){
  var enfant = document.getElementById('enfant');
  var selectElmt = document.getElementById("enfant");
  var valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value;
  var nb_16= document.getElementById('nb_16');
  var valeurselectionnee_2 = nb_16.options[selectElmt.selectedIndex].value;

for (var i = 0; i < nb_16.length; i++) {

if(nb_16[i].selected){
var tarif_16 = 8.50 * parseFloat(valeurselectionnee_2);
}

}
for (var i = 0; i < selectElmt.length; i++) {
  if(selectElmt[i].selected){
  var tarif_enfant = 5.90 * parseFloat(valeurselectionnee);
}
}
document.querySelector('input').value = tarif_16 + tarif_enfant+"€";
}
