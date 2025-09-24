function compareNumbers() {
    const n1 = parseInt(document.getElementById("num1").value);
    const n2 = parseInt(document.getElementById("num2").value);

 
    if (isNaN(n1) || isNaN(n2)) {
        document.getElementById("result").textContent =
            "Please enter valid integers.";
        return;
    }

    let message;
    if (n1 > n2) {
        message = `Larger Number: ${n1}\nSmaller Number: ${n2}`;
    } else if (n2 > n1) {
        message = `Larger Number: ${n2}\nSmaller Number: ${n1}`;
    } else {
        message = `Both numbers are equal: ${n1}`;
    }

   
    document.getElementById("result").innerHTML = message.replace(/\n/g, "<br>");
}
