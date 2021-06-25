var pokemon = [  
  "Slowbro",  
  "Pikachu",  
  "Charmander"  
 ];

 var textbox = document.getElementById("pokename");
 var item = document.getElementById("pokelist");

 verstuur.addEventListener("click", addPokemon);
 sorteer.addEventListener("click", sorteerPokemon);
 sorteerReverse.addEventListener("click", sorteerPokemonReverse);
 
 function addPokemon() {
  var text = "";
  var i;
  for (i = 0; i < pokemon.length; i++) {
    text += "<li>" + pokemon[i] + "</li>";
  }
  document.getElementById("pokelist").innerHTML = text;

  if(textbox.value == "")
  {
    alert("Voeg iets toe")
  }
  else
  {
    var items = document.createElement("li");
    var inputText = document.getElementById("pokename").value;
    pokemon.push(inputText);
    items.innerHTML = textbox.value;   
    item.appendChild(items);

    // var txtvar = " ";
    // for(i=0; i<pokemon.length; i++);
    // {
    //   txtvar = txtvar + pokemon[i];
    // }
  }
  document.getElementById("pokename").value = "";
 }

 function sorteerPokemon() {
  var items = document.createElement("li");
  pokemon.sort();

  var text = "";
  var i;
  for (i = 0; i < pokemon.length; i++) {
    text += "<li>" + pokemon[i] + "</li>";
  }
  document.getElementById("pokelist").innerHTML = text;
  //item.appendChild(items);  
  console.log(pokemon);

}

function sorteerPokemonReverse() {
  var items = document.createElement("li");
  pokemon.sort();
  pokemon.reverse();

  var text = "";
  var i;
  for (i = 0; i < pokemon.length; i++) {
    text += "<li>" + pokemon[i] + "</li>";
  }
  document.getElementById("pokelist").innerHTML = text;
  //item.appendChild(items);  
  console.log(pokemon);

}