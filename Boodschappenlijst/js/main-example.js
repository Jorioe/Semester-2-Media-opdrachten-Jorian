document.addEventListener("DOMContentLoaded", function() {
    var grocerie = document.getElementById("grocerie");
    var addButton = document.getElementById("add");
    var removeButton = document.getElementById("remove");
    var groceries = document.getElementById("groceries");

    addButton.addEventListener("click", henk);
    removeButton.addEventListener("click", removeAll);

    function henk()
    {
        var li = document.createElement("li");
        li.innerHTML = grocerie.value;   

        li.addEventListener("click", truus);

        groceries.appendChild(li);

        document.getElementById("grocerie").value = "";
    }

    function truus()
    {
        console.log(this);
        this.innerHTML = "aangeklikt";
        alert("Jeeh");
    }

    function removeAll() {
        var list = document.getElementById("groceries");
        while (list.hasChildNodes()) {
          list.removeChild(list.firstChild);
        }
      }
});