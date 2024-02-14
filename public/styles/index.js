let currentBlockIndex = 0;
const equipmentsCards = document.querySelectorAll('.equipments__card');

function showBlock(index) {
    equipmentsCards.forEach((equipments__card, i) => {
        equipments__card.classList.remove('visible');
        if (i >= index && i < index + 3) {
            equipments__card.classList.add('visible');
        }
    });
}

function nextBlock() {
    if (currentBlockIndex < equipmentsCards.length - 3) {
        currentBlockIndex++;
    } else {
        currentBlockIndex = 0; // Wrap around to the beginning
    }
    showBlock(currentBlockIndex);
}

function prevBlock() {
    if (currentBlockIndex > 0) {
        currentBlockIndex--;
    } else {
        currentBlockIndex = equipmentsCards.length - 3; // Wrap around to the end
    }
    showBlock(currentBlockIndex);
}

setInterval(nextBlock, 5000);
