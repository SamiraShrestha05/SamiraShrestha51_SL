function displayColors() {
    const colors = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
    const suffixes = ["th","st","nd","rd"];
    

    document.getElementById("arrays").textContent = `Arrays: ${colors} And: ${suffixes} `;
    let output = "";

    for (let i = 0; i < colors.length; i++) {
        let j = i + 1; 
        let suffix = (j <= 3) ? suffixes[j] : suffixes[0];
        output += `${j}${suffix} choice is ${colors[i]}.<br>`;
    }

    document.getElementById("result").innerHTML = output;
}
