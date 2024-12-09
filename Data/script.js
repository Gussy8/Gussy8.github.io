// Funktion til at starte en nedtælling
function startCountdown(elementId, endTime) {
    const countdownElement = document.getElementById(elementId);

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = endTime - now;

        if (distance < 0) {
            // Hvis nedtællingen er færdig
            countdownElement.innerHTML = "Tiden er udløbet!";
            clearInterval(interval);
            return;
        }

        // Beregn tid i dage, timer, minutter og sekunder
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Vis den opdaterede tid
        countdownElement.innerHTML = `<strong>${days} Dage, ${hours}timer, ${minutes}min og ${seconds}sek</strong>`;
    }

    // Opdater nedtællingen hvert sekund
    const interval = setInterval(updateCountdown, 1000);
    updateCountdown(); // Kald en gang med det samme for at vise den initiale tid
}

// Sæt slutdatoer for de tre nedtællinger
const countdown1EndTime = new Date("2025-07-12T00:00:00").getTime();
const countdown2EndTime = new Date("2024-12-20T14:20:00").getTime();
const countdown3EndTime = new Date("2026-06-27T14:20:00").getTime();

// Start de tre nedtællinger
startCountdown("countdown1", countdown1EndTime);
startCountdown("countdown2", countdown2EndTime);
startCountdown("countdown3", countdown3EndTime);
