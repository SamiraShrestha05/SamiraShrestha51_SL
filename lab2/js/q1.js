function reverseNumber() {
    const num = document.getElementById("numInput").value;

    if (num === "") {
        document.getElementById("result").textContent = "Please enter a number.";
        return;
    }

    const reversed = parseFloat(num.toString().split('').reverse().join('')) * Math.sign(num);

    document.getElementById("result").textContent = `Reversed Number: ${reversed}`;
}
