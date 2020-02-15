
function bouton(){
  var bouton = document.getElementById("bouton");
  formulaire();
}

function formulaire(){
  var label = document.getElementById('label');
  label.innerHTML = 'Ecrivez une commission :';
  var input = document.getElementById('input');
  input.innerHTML = "<textarea style='width: 50%; height: 150px;padding: 12px 15px;'/>";
  var submit = document.getElementById('submit');
  submit.innerHTML = "<input ows='5' size='50' style='margin-top:20px;' type='submit' value='Envoyer une commission'/>";

}
