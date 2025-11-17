function checkArray() {
    const input = document.getElementById("userInput").value.trim();

    let parsedInput;

    try {
        
        parsedInput = eval(input);
    } catch (e) {
        parsedInput = input; 
    }

    const result = Array.isArray(parsedInput);
    
    document.getElementById("result").textContent = 
        result ? "This is an array." : "This is NOT an array.";
}
