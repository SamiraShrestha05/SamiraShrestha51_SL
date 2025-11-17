function alphabetOrder(str) {
    return str.split('').sort().join('');
}

function sortString() {
    const input = document.getElementById("wordInput").value.trim();
    if (input === "") {
        document.getElementById("result").textContent = "Please enter a string.";
        return;
    }
    document.getElementById("result").textContent =
        `Alphabetical Order: ${alphabetOrder(input)}`;
}
