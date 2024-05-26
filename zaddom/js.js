document.getElementById("energia").addEventListener("change", function(event) {
    let select = document.getElementById("energia");
    if (select.value != 0) {
        let selectedOption = select.options[select.selectedIndex];
        let m = parseFloat(selectedOption.getAttribute('m'));
        let g = parseFloat(selectedOption.getAttribute('g'));
        let h = parseFloat(selectedOption.getAttribute('h'));
        let v = parseFloat(selectedOption.getAttribute('v'));

        let eK = (m * v * v) / 2;
        let eP = m * g * h;
        let eM = eK + eP;

        document.getElementById("wynik").innerHTML = 
            `
             <p>Masa: ${m} kg</p>
             <p>Grawitacja: ${g} m/s²</p>
             <p>Wysokość: ${h} m</p>
             <p>Prędkość: ${v} m/s</p>
             <p>Energia Kinetyczna: ${eK}</p>
             <p>Energia Potencjalna: ${eP}</p>
             <p>Energia Mechaniczna: ${eM}</p>`;
    }
    else {
        document.getElementById("wynik").innerHTML = "Wybierz";
    }
});