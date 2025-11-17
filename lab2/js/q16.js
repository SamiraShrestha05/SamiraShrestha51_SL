function checkOddEven() {
    let output = "";
    for (let i = 0; i <= 15; i++) {
        if (i % 2 === 0) {
            output += `${i} is even<br>`;
        } else {
            output += `${i} is odd<br>`;
        }
    }
    document.getElementById("result").innerHTML = output;
}
