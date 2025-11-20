document.addEventListener('DOMContentLoaded', function() {

    const messagesContainer = document.getElementById('messages');
    const chatInput = document.getElementById('chat-message');
    const sendButton = document.getElementById('chat-send');

    function renderMessages(data) {
        messagesContainer.innerHTML = data.map(msg => {
            const isMine = msg.user_id == CURRENT_USER_ID;
            const messageClass = isMine ? 'my-message' : 'other-message';

            const content = msg.message.endsWith('.gif')
                ? `<img src="${msg.message}" class="gif-msg">`
                : `<p>${msg.message}</p>`;

            return `
                <div class="chat-message ${messageClass}">
                    <span class="chat-pseudo">${msg.pseudo}</span>
                    ${content}
                    <span class="chat-time">${new Date(msg.timestamp).toLocaleTimeString()}</span>
                </div>
            `;
        }).join('');

        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function fetchMessages() {
        fetch('fetch_messages.php')
            .then(res => res.json())
            .then(data => { if (!data.error) renderMessages(data); })
            .catch(console.error);
    }

    function sendMessage() {
        const text = chatInput.value.trim();
        if (text === "") return;

        const formData = new FormData();
        formData.append('message', text);

        fetch('send_message.php', { method: 'POST', body: formData })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                chatInput.value = '';
                fetchMessages();
            }
        })
        .catch(console.error);
    }

    sendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', e => { if (e.key === 'Enter') sendMessage(); });

    fetchMessages();
    setInterval(fetchMessages, 2000);

    const toggleChatBtn = document.getElementById('toggle-chat');
    const chatPanel = document.querySelector(".chat-panel");

    if (toggleChatBtn && chatPanel) {
        toggleChatBtn.textContent = chatPanel.classList.contains("hidden") ? "▲" : "▼";
        toggleChatBtn.addEventListener("click", () => {
            chatPanel.classList.toggle("hidden");
            toggleChatBtn.textContent = chatPanel.classList.contains("hidden") ? "▲" : "▼";
        });
    }

});


/* ------- NOUVEAUTÉS JEU / TIMER / GRILLE ------- */

function genererGrille() {
    const taille = document.querySelector('#grid-size').value;
    const difficulte = document.querySelector('#theme').value;
}

let gameTimer = {
    intervalId: null,
    element: document.getElementById("timer"),
    activetimer: false,

    startTimer() {
        if (this.activetimer) this.stopTimer();
        this.activetimer = true;
        this.element.innerText = "0:00";
        let temps = 0;
        const timerElement = this.element;

        this.intervalId = setInterval(() => {
            temps++;
            let minutes = Math.floor(temps / 60);
            let secondes = temps % 60;
            secondes = secondes < 10 ? "0" + secondes : secondes;
            timerElement.innerText = minutes + ":" + secondes;
        }, 1000);
    },

    stopTimer() {
        clearInterval(this.intervalId);
        this.activetimer = false;
    },

    getTimer() {
        return this.element.innerText;
    }
};

function stopTimer() {
    gameTimer.stopTimer();
}

function newscore() {
    fetch("../../utils/newscore.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            score: gameTimer.getTimer(),
            gridSize: document.querySelector('#grid-size').value
        })
    })
        .then(res => res.json())
        .catch(err => console.error(err));
}

const generateBtn = document.querySelector('#generate');
const gridElement = document.getElementById("grid");
const gridSelect = document.getElementById("grid-size");

generateBtn?.addEventListener('click', () => {
    genererGrille();
    gameTimer.startTimer();

    const [rows, cols] = gridSelect.value.split("x").map(Number);
    const totalCards = rows * cols;

    gridElement.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
    gridElement.innerHTML = "";

    const imgPath = "../../img/card1.jpg";

    for (let i = 0; i < totalCards; i++) {
        const cell = document.createElement("div");
        cell.classList.add("cell");

        const img = document.createElement("img");
        img.src = imgPath;

        cell.appendChild(img);
        gridElement.appendChild(cell);
    }
});

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