function myfunction()
{
alert("Welcome, User");
}

function myfunctionWithName(name)
{
alert("Welcome, " + name);
}

// function sum(a,b=60){
// return a+b;
// }

function addMore(a,b,...other){
console.log(a);
console.log(b);
console.log(other);
}

let sayHello = (name) => {
alert(name);
}
addMore(49,68);
addMore(50,60,56,23,4,9);
addMore(56,87,98);