function calculate() {

    const n1 = parseFloat(document.getElementById("num1").value);
    const n2 = parseFloat(document.getElementById("num2").value);


    if (isNaN(n1) || isNaN(n2)) {
        document.getElementById("result").textContent =
            "Please enter valid numbers.";
        return;
    }


    const addition = n1 + n2;
    const subtraction = n1 - n2;
    const multiplication = n1 * n2;
    const division = n2 !== 0 ? (n1 / n2).toFixed(2) : "∞ (division by zero)";


    document.getElementById("result").innerHTML =
        `Addition: ${addition}<br>` +
        `Subtraction: ${subtraction}<br>` +
        `Multiplication: ${multiplication}<br>` +
        `Division: ${division}`;
}
