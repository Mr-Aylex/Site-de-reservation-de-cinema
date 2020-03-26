

function calcul(){

  var type_tarif = "";
  var selectElmt = document.getElementById("enfant");
  var valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value;

for (var i = 0; i < selectElmt.length; i++) {
  if(selectElmt[i].selected){
    var prix_enfant = valeurselectionnee * 3;
    type_tarif = "enfant";
  }

  console.log(prix_enfant,"enfant");
}

var selectElmt_2 = document.getElementById("nb_16");
var valeurselectionnee_2 = selectElmt_2.options[selectElmt_2.selectedIndex].value;


for (var i = 0; i < selectElmt_2.length; i++) {
  if(selectElmt_2[i].selected){
    var prix_16 = valeurselectionnee_2 * 8.50;
  }

  console.log(prix_16,"16 ans");
}

var selectElmt_3 = document.getElementById("nb_adulte");
var valeurselectionnee_3 = selectElmt_3.options[selectElmt_3.selectedIndex].value;


for (var i = 0; i < selectElmt_2.length; i++) {
  if(selectElmt_3[i].selected){
    var prix_adulte = valeurselectionnee_3 * 10.50;
  }

  console.log(prix_adulte,"Adulte");
}

var total = prix_enfant+prix_16+prix_adulte;
var input = document.querySelector('input');
input.value = total+" €";


}
