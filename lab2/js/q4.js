function capitalizeWords(str) {
    return str
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
        .join(' ');
}

function convertText() {
    const input = document.getElementById("textInput").value.trim();
    if (input === "") {
        document.getElementById("result").textContent = "Please enter some text.";
        return;
    }
    document.getElementById("result").textContent =
        `Converted Text: ${capitalizeWords(input)}`;
}
