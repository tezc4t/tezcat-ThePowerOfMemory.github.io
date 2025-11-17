function genererGrille() {
    let genererClick = true;
    const taille = document.querySelector('#grid-size').value;
    const difficulte = document.querySelector('#theme').value;
    console.log(taille, difficulte);
}

function startTimer() {
    const timerElement = document.getElementById("timer");
    let temps = 0;

    setInterval(function () {
        temps++;

        let minutes = Math.floor(temps / 60);
        let secondes = temps % 60;

        secondes = secondes < 10 ? "0" + secondes : secondes;

        timerElement.innerText = minutes + ":" + secondes;
    }, 1000);
}

const generateBtn = document.querySelector('#generate');

generateBtn?.addEventListener('click', function(event) {
    genererGrille();
    startTimer();
});

const gridElement = document.getElementById("grid");
const gridSelect = document.getElementById("grid-size");

generateBtn.addEventListener("click", () => {
    const value = gridSelect.value;      // "4x4"
    const [rows, cols] = value.split("x").map(Number);
    const totalCards = rows * cols;

    // Définition de la grille CSS dynamique
    gridElement.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
    gridElement.innerHTML = ""; // vide la grille

    // Image unique
    const imgPath = "../../img/card1.jpg";

    // Génération de toutes les cellules avec la même image
    for (let i = 0; i < totalCards; i++) {
        const cell = document.createElement("div");
        cell.classList.add("cell");

        const img = document.createElement("img");
        img.src = imgPath;
        img.alt = "carte";

        cell.appendChild(img);
        gridElement.appendChild(cell);
    }
});
// fonctions pour la story 3
function stopTimer(){

}
function resetTimer(){

}
function getTimer(){
    const timerElement = document.getElementById("timer");
}