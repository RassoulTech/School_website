document.addEventListener("DOMContentLoaded", function () {
    const educationSelect = document.getElementById("education");
    const classeSelect = document.getElementById("classe");

    const classes = {
        "Primaire": ["CI", "CP", "CE1", "CE2", "CM1", "CM2"],
        "Collège": ["6ème", "5ème", "4ème", "3ème"],
        "Lycée": ["2nde", "1ère", "Terminale"]
    };

    educationSelect.addEventListener("change", function () {
        const cycle = this.value;
        classeSelect.innerHTML = "";
        if (cycle && classes[cycle]) {
            classes[cycle].forEach(cl => {
            let option = document.createElement("option");
            option.value = cl;
            option.textContent = cl;
            classeSelect.appendChild(option);
        });
        } else {
        let option = document.createElement("option");
        option.textContent = "Sélectionnez d'abord un cycle";
        classeSelect.appendChild(option);
        }
    });
    });