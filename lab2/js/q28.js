
const yearSpan = document.getElementById("year");
const dateTime = document.getElementById("datetime");
const listItems = document.querySelectorAll("ul li");

const randomColor = () => {
    return `rgb(${Math.floor(Math.random() * 256)},
                ${Math.floor(Math.random() * 256)},
                ${Math.floor(Math.random() * 256)})`;
};

// a. 
setInterval(() => {
    yearSpan.style.color = randomColor();
}, 1000);

// b.
setInterval(() => {
    const now = new Date().toLocaleString();
    dateTime.textContent = now;
    dateTime.style.padding = "8px";
    dateTime.style.display = "inline-block";
    dateTime.style.backgroundColor = randomColor();
}, 1000);

// c, d, e. 
listItems.forEach(li => {
    li.style.listStyle = "none";
    li.style.padding = "10px";
    li.style.margin = "5px 0";
    li.style.fontSize = "18px";
    li.style.color = "white";

    const text = li.textContent.toLowerCase();

    if (text.includes("done")) {
        li.style.backgroundColor = "green";      
    } 
    else if (text.includes("ongoing")) {
        li.style.backgroundColor = "yellow";     
        li.style.color = "black";
    } 
    else if (text.includes("coming")) {
        li.style.backgroundColor = "red";       
    }
});
