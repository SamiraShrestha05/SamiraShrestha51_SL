function countVowels(str) {
    const matches = str.match(/[aeiou]/gi);
    return matches ? matches.length : 0;
}

function showVowelCount() {
    const input = document.getElementById("textInput").value.trim();
    if (input === "") {
        document.getElementById("result").textContent = "Please enter a string.";
        return;
    }
    document.getElementById("result").textContent =
        `Number of vowels: ${countVowels(input)}`;
}
