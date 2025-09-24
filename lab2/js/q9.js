function compareThreeNumbers() {
    const n1 = parseInt(document.getElementById("num1").value);
    const n2 = parseInt(document.getElementById("num2").value);
    const n3 = parseInt(document.getElementById("num3").value);


    if (isNaN(n1) || isNaN(n2) || isNaN(n3)) {
        document.getElementById("result").textContent =
            "Please enter valid integers in all fields.";
        return;
    }

    const largest = Math.max(n1, n2, n3);
    const smallest = Math.min(n1, n2, n3);

    document.getElementById("result").innerHTML =
        `Largest Number: ${largest}<br>Smallest Number: ${smallest}`;
}
