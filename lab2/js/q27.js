// a. 
const firstPara = document.querySelector("p");
console.log("First paragraph:", firstPara.textContent);

// b. 
const para1 = document.querySelector("#p1");
const para2 = document.querySelector("#p2");
const para3 = document.querySelector("#p3");
const para4 = document.querySelector("#p4");

console.log(para1.textContent, para2.textContent, para3.textContent, para4.textContent);

// c. 
const allParas = document.querySelectorAll("p");
console.log(allParas);

// d. 
allParas.forEach((p, index) => {
    console.log(`Paragraph ${index + 1}: ${p.textContent}`);
});

// e. 
para4.textContent = "Fourth Paragraph";

// f. 
allParas[0].setAttribute("class", "first-class");
allParas[1].id = "second-id";
allParas[2].className = "third-class";
allParas[3].setAttribute("id", "fourth-id");

// g. 
allParas.forEach((p) => {
    p.style.color = "blue";
    p.style.background = "lightgray";
    p.style.border = "1px solid black";
    p.style.fontSize = "18px";
    p.style.fontFamily = "Arial";
});

// h. 
allParas.forEach((p, i) => {
    if (i === 0 || i === 2) {
        p.style.color = "green";
    } else {
        p.style.color = "red";
    }
});

// i. 
allParas[0].textContent = "Paragraph One Updated";
allParas[0].id = "para-one";
allParas[0].className = "text-one";

allParas[1].textContent = "Paragraph Two Updated";
allParas[1].id = "para-two";
allParas[1].className = "text-two";

allParas[2].textContent = "Paragraph Three Updated";
allParas[2].id = "para-three";
allParas[2].className = "text-three";

allParas[3].textContent = "Paragraph Four Updated";
allParas[3].id = "para-four";
allParas[3].className = "text-four";
