let display = document.getElementById("Display");
let currentInput = "";

function updateDisplay() {
    display.innerText = currentInput;
}

for (let i = 0; i <= 9; i++) {
    document.getElementById("btn" + i).onclick = function () {
        currentInput += i;
        updateDisplay();
    };
}

document.getElementById("opDiv").onclick = function () {
    currentInput += "/";
    updateDisplay();
};

document.getElementById("opMul").onclick = function () {
    currentInput += "*";
    updateDisplay();
};

document.getElementById("opSub").onclick = function () {
    currentInput += "-";
    updateDisplay();
};

document.getElementById("opAdd").onclick = function () {
    currentInput += "+";
    updateDisplay();
};
// Equal button
document.getElementById("equal").onclick = function () {
    try {
        currentInput = eval(currentInput).toString();
        updateDisplay();
    } catch {
        display.innerText = "Error";
        currentInput = "";
    }
};

document.getElementById("Clear").onclick = function () {
    currentInput = "";
    updateDisplay();
};