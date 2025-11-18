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
    gridElement.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
    gridElement.innerHTML = ""; // vide la grille


    const imgPath = "../../img/card1.jpg";

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

function loadMessages() {
    fetch("load.php")
        .then(response => response.json())
        .then(data => {
            let box = document.getElementById("messages");
            box.innerHTML = "";

            data.forEach(m => {
                let div = document.createElement("div");
                div.classList.add("chat-msg");

                if (m.sender === "user") div.classList.add("chat-user");
                else div.classList.add("chat-bot");

                div.textContent = m.message;
                box.appendChild(div);
            });

            box.scrollTop = box.scrollHeight;
        });
}

function sendMessage() {
    let msg = document.getElementById("chat-message").value;
    if (msg.trim() === "") return;

    fetch("send.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "message=" + encodeURIComponent(msg)
    }).then(() => {
        document.getElementById("chat-message").value = "";
        loadMessages();
    });
}

document.getElementById("chat-send").addEventListener("click", sendMessage);

// Enter pour envoyer
document.getElementById("chat-message").addEventListener("keypress", function(e) {
    if (e.key === "Enter") sendMessage();
});

// Refresh auto
setInterval(loadMessages, 1000);
loadMessages();