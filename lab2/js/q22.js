function checkBlank() {
    const input = document.getElementById("textInput").value;
    if (isBlank(input)) {
        document.getElementById("result").textContent = "The string is blank.";
    } else {
        document.getElementById("result").textContent = "The string is not blank.";
    }
}
function isBlank(str) {
    return (!str || str.trim() === "");
}
