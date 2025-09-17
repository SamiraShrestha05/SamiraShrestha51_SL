function clock(){
let today = new Date();
document.getElementById('clock').innerHTML = today;
setTimeout(clock,1000);
}

clock();

let nd = new Date();
// let date = nd.getDate();
// alert(date);

// let month = nd.getMonth();
// alert(month);

// let day = nd.getDay();
// alert(day);

// let year = nd.getFullYear();
// alert(year);

// let hour = nd.getHours();
// alert(hour);

// let min = nd.getMinutes();
// alert(min);

let second = nd.getSeconds();
alert(second);