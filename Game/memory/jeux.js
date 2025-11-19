function genererGrille() {
    let genererClick = true;
    const taille = document.querySelector('#grid-size').value;
    const difficulte = document.querySelector('#theme').value;
};


let gameTimer = {
    // Mon attribut interval id
    intervalId: null,
    element: document.getElementById("timer"),
    activetimer: false,
    startTimer() {
        if (this.activetimer) { // éviter de lancer plusieurs timers
            this.stopTimer();}
        this.activetimer = true;
        this.element.innerText = "0:00";
        const timerElement  = this.element;
        let temps           = 0;

        this.intervalId     = setInterval(function () {
            temps++;

            let minutes = Math.floor(temps / 60);
            let secondes = temps % 60;

            secondes = secondes < 10 ? "0" + secondes : secondes;

            timerElement.innerText = minutes + ":" + secondes;
        }, 1000)
    },

    stopTimer() {
        clearInterval(this.intervalId);
        this.activetimer = false;
    },

    getTimer() {
        return this.element.innerText;
    },
};

function newscore() {
    fetch("../../utils/newscore.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            score: gameTimer.getTimer(),
            gridSize: document.querySelector('#grid-size').value
        })
        })
        .then(response => response.json())
        .then(data => {
          
        })
        .catch(error => {
            console.error("le score n'a pas été récéptioné :", error);
        });
};

const generateBtn = document.querySelector('#generate');

generateBtn?.addEventListener('click', function(event) {
    genererGrille();
    gameTimer.startTimer();
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
})
function gameover() {
    newscore();
    alert("Votre score est de " + gameTimer.getTimer());
    if (confirm("Voulez-vous rejouer")) {
        genererGrille();
        gameTimer.startTimer();
    } else {
        alert("Merci d'avoir joué !");
        stopTimer();
}
}