function findLargest() {
    const input = document.getElementById("numbersInput").value.trim();

    if (input === "") {
        document.getElementById("result").textContent =
            "Please enter some numbers.";
        return;
    }

    const numbers = input.split(',').map(num => parseFloat(num.trim()));

 
    if (numbers.some(isNaN)) {
        document.getElementById("result").textContent =
            "Please enter valid numbers separated by commas.";
        return;
    }


    const largest = Math.max(...numbers);

    document.getElementById("result").textContent =
        `The largest number is: ${largest}`;
}
