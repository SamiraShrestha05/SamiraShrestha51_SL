function findLargest() {
  
    let num1 = parseFloat(prompt("Enter first number:"));
    let num2 = parseFloat(prompt("Enter second number:"));
    let num3 = parseFloat(prompt("Enter third number:"));
    let num4 = parseFloat(prompt("Enter fourth number:"));
    let num5 = parseFloat(prompt("Enter fifth number:"));

    
    if ([num1, num2, num3, num4, num5].some(isNaN)) {
        alert("Please enter valid numbers for all five inputs.");
        return;
    }

   
    let largest = num1;
    if (num2 > largest) largest = num2;
    if (num3 > largest) largest = num3;
    if (num4 > largest) largest = num4;
    if (num5 > largest) largest = num5;

    
    alert("The largest number is: " + largest);
}
