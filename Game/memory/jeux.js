function genererGrille() {
    let genererClick = true;
    const taille = document.querySelector('#grid-size').value;
    const difficulte = document.querySelector('#theme').value;
};
// fonction nbrandom
function getRandomInt(max) {
    return Math.floor((Math.random() * max));
};
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
};

const generateBtn = document.querySelector('#generate');



const gridElement = document.getElementById("grid");
const gridSelect = document.getElementById("grid-size");
const gridtheme = document.getElementById("theme");
generateBtn.addEventListener("click", () => {
    // obtient une id d'image aléatoire
    function randomimgid() {
        return getRandomInt(totalCards/2)+1;
    }
    genererGrille();
    // nombre de cartes retournées
    let currentvisible = 0
    const theme = gridtheme.value;
    const value = gridSelect.value;      // "4x4"
    const [rows, cols] = value.split("x").map(Number);
    const totalCards = rows * cols;
    gridElement.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
    gridElement.innerHTML = ""; // vide la grille
    // création du dico suivant le nombre de cartes déjà générées
    let imgmap = new Map();
    for (let i = 1; i <= (totalCards/2); i++) {
        imgmap.set(i, 0);
    }
    // création du tableau des cartes de la partie
    let imgtab = [];
    for (let i = 1; i < rows+1; i++) {
        let newrow = [];
        for (let j = 1; j < cols+1; j++) {
            let imgid = randomimgid();
            let count = imgmap.get(imgid);
            while (count >= 2) {
                imgid = randomimgid();
                count = imgmap.get(imgid);
            }
            imgmap.set(imgid, count + 1);
            newrow.push(imgid);
        }
        imgtab.push(newrow); 
    }

    // création des cartes
    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            const cell = document.createElement("div");
            cell.classList.add("cell");
            cell_class = 'cell'
            let imgid = imgtab[i][j];
            cell.classList.add(cell_class);
            const img = document.createElement("img");
            img.alt = "carte";
            img.src = "../../img/themes/"+(theme)+"/" + (imgid)  + ".jpg";
            img.style.visibility = "hidden";
            cell.id = (i*rows + j+1)
            cell.img = img;
            img.id = imgid;
            cell.appendChild(img);
            gridElement.appendChild(cell);
            // ajoute la possibilité de cliquer sur les cartes
            cell.addEventListener("click", function() {
                if (verrou) return;             // Bloque si on doit attendre
                if (cell === carte1) return;    // Empêche de cliquer deux fois sur la même carte

                img.style.visibility = "visible";
                cell.style.backgroundImage = 'none';
                cell.style.pointerEvents = "none";

                if (carte1 === null) {
                    carte1 = cell;    
                } else {
                    carte2 = cell;   
                    verrou = true;    

                // Comparaison des cartes selectionées
                    // Mêmes cartes
                    if (carte1.img.id === carte2.img.id) {
                        carte1 = null;
                        carte2 = null;
                        verrou = false;
                        let expectedvisible = totalCards
                            currentvisible += 2
                            console.log(currentvisible)
                        if (expectedvisible === currentvisible) {
                            // met un délais pour laisser le temps au navigateur de rafraichir la fenêtre
                            setTimeout(() => {
                                // partie terminée (met la fonction gameover())
                                alert("Gagné !");
                            }, 100)
                        }


                    } else {
                    // Pas les mêmes cartes
                        setTimeout(() => {
                            carte1.img.style.visibility = "hidden";
                            carte2.img.style.visibility = "hidden";

                            carte1.style.backgroundImage = "url('../../img/dos carte.jpg')";
                            carte2.style.backgroundImage = "url('../../img/dos carte.jpg')";

                            carte1.style.pointerEvents = "auto";
                            carte2.style.pointerEvents = "auto";

                            carte1 = null;
                            carte2 = null;
                            verrou = false;
                        }, 
                        400);
                    }
                }
            });
        }
    };
    startTimer();
});
// initialisation des variables
// carte cliquées puis comparées
carte1 = null;
carte2 = null;
// verrou empechant de cliquer sans attendre que les cartes ne se retourne
let verrou = false;


