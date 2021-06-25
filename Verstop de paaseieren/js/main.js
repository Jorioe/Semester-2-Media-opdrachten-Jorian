document.addEventListener("DOMContentLoaded", function () {
    var start = document.getElementById("start"); //button
    var playfield = document.getElementById("playfield");
    var eggs = ["egg1", "egg2"];
    var number = document.getElementById("number");
    var score = document.getElementById("gevonden");
    var count = 0;


    /*
    1. de gebruiker drukt op knopje
    2. paaseieren genereren
    */

    start.addEventListener("click", createEggs);

    function createEggs() {
        var inputNumber = number.value;
        /* verwijdert oude paaseieren */
        var divsToRemove = playfield.children;
        for (var i = divsToRemove.length - 1; i >= 0; i--) {
            divsToRemove[i].remove();
        }

        /* voegt nieuwe paaseieren toe*/
        for (i = 0; i < inputNumber; i++) {
            var top = createRandomNumber(0, 440);
            var left = createRandomNumber(0, 650);
            var randomClass = createRandomNumber(0, eggs.length);
            var egg = document.createElement("div");
            egg.className = eggs[randomClass];
            egg.style.top = top + "px";
            egg.style.left = left + "px";

            egg.addEventListener("click", function (e) {
                this.remove();
                count++;
                document.getElementById("gevonden").innerHTML = "aantal gevonden: " + count + " paaseieren";
            });
            playfield.appendChild(egg);
        }
    }

    function createRandomNumber(min, max) {
        return Math.floor(Math.random() * max) + min;
    }

});
