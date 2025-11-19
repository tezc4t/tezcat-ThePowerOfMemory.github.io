document.addEventListener('DOMContentLoaded', function() {
    const messagesContainer = document.getElementById('messages');
    const chatInput = document.getElementById('chat-message');
    const sendButton = document.getElementById('chat-send');

    // ID utilisateur injecté depuis PHP
    // <script>const CURRENT_USER_ID = <?= $_SESSION['userid']; ?>;</script>
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


    function renderMessages(data) {
        let output = '';
        data.forEach(msg => {
            const isMine = msg.user_id == CURRENT_USER_ID;
            const messageClass = isMine ? 'my-message' : 'other-message';

            output += `
                <div class="chat-message ${messageClass}">
                    <span class="chat-pseudo">${msg.pseudo}</span>
                    <p>${msg.message}</p>
                    <span class="chat-time">${new Date(msg.timestamp).toLocaleTimeString()}</span>
                </div>
            `;
        });

        messagesContainer.innerHTML = output;
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function fetchMessages() {
        fetch('fetch_messages.php')
            .then(res => res.json())
            .then(data => {
                if (!data.error) renderMessages(data);
            })
            .catch(err => console.error(err));
    }

    function sendMessage() {
        const text = chatInput.value.trim();
        if (text === "") return;

        const formData = new FormData();
        formData.append('message', text);

        fetch('send_message.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                chatInput.value = '';
                fetchMessages();
            } else {
                alert("Erreur : " + data.message);
            }
        })
        .catch(err => console.error(err));
    }

    sendButton.addEventListener('click', sendMessage);

    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendMessage();
    });

    fetchMessages();
    setInterval(fetchMessages, 2000);
});

document.addEventListener('DOMContentLoaded', () => {
    const toggleChatBtn = document.getElementById('toggle-chat');
    const chatPanel = document.getElementById('chat-panel');

    if (!toggleChatBtn || !chatPanel) return;

    toggleChatBtn.addEventListener('click', () => {
        chatPanel.classList.toggle('hidden');
    });
   
});

// Bouton et panneau
const toggleBtn = document.getElementById("toggle-chat");
const chatPanel = document.querySelector(".chat-panel");

// Sécurité : si un des deux manque on stoppe
if (!toggleBtn || !chatPanel) {
    console.error("Bouton #toggle-chat ou .chat-panel introuvable");
} else {

    // État initial : si chat caché on met l’icône vers le haut
    toggleBtn.textContent = chatPanel.classList.contains("hidden") ? "▲" : "▼";

    // Toggle au clic
    toggleBtn.addEventListener("click", () => {
        chatPanel.classList.toggle("hidden");

        // Change l’icône
        toggleBtn.textContent =
            chatPanel.classList.contains("hidden") ? "▲" : "▼";
    });
}
