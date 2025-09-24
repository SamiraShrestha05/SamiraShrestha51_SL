function removeChars() {
    const str = document.getElementById("stringInput").value;
    const count = parseInt(document.getElementById("countInput").value);
    const positionInput = document.getElementById("positionInput").value;
    const position = positionInput ? parseInt(positionInput) : 0;

    if (!str) {
        document.getElementById("result").textContent = "Please enter a string.";
        return;
    }
    if (isNaN(count) || count < 0) {
        document.getElementById("result").textContent = "Enter a valid number of characters to remove.";
        return;
    }

    const result = removeCharacters(str, count, position);
    document.getElementById("result").textContent = `Result: ${result}`;
}

function removeCharacters(str, count, position = 0) {
    return str.slice(0, position) + str.slice(position + count);
}
