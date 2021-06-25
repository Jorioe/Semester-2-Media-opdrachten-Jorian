document.addEventListener("DOMContentLoaded", function () {
    var addButton = document.getElementById("add");
    var removeButton = document.getElementById("remove");

    addButton.addEventListener("click", henk);
    removeButton.addEventListener("click", removeAll);

    function henk() {
        var radios = document.getElementsByName('radio');

        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                // do whatever you want with the checked radio
                var node = document.createElement("Li");
                var text = document.getElementById("aantal").value;
                var textnode = document.createTextNode(radios[i].value + " - " + text + " tickets");
                node.appendChild(textnode);
                document.getElementById("tickets").appendChild(node);
                document.getElementById("aantal").value = '';
                document.getElementsByName('radio').value = '';
            }
        }




    }


    function removeAll() {
        var list = document.getElementById("tickets");
        while (list.hasChildNodes()) {
          list.removeChild(list.firstChild);
        }
      }
});
