const mdp = document.getElementById("motdepasse");
const bar = document.getElementById("strength-bar");
const text = document.getElementById("strength-text");


mdp.addEventListener("input",() => {

    const val = mdp.value;
    let score = 0;

    if (val.length >= 8) score++;
    if (/[A-Z]/.test(val)) score++;
    if (/[a-z]/.test(val)) score++;
    if (/[0-9]/.test(val)) score++;
    if (/[^A-Za-z0-9]/.test(val)) score++;

    if (score === 0) {
        bar.classList = '';
        bar.classList.add("strength-null");
        text.textContent = "";
    } else if (score === 1) {
        bar.classList = '';
        bar.classList.add("strength-faible");
        text.textContent = "Faible";
    } else if (score === 2) {
        bar.classList = '';
        bar.classList.add("strength-moyenne");
        text.textContent = "Moyenne";
    } else if (score === 3) {
        bar.classList = '';
        bar.classList.add("strength-moyenne");
        text.textContent = "Moyenne";
    } else if (score === 4) {
        bar.classList = '';
        bar.classList.add("strength-moyenne");
        text.textContent = "Moyenne";
    } else {
        bar.classList = '';
        bar.classList.add("strength-forte");
        text.textContent = "Forte";
    }
});