function joinArray() {
    const myArray = ["Hello", "World", "JavaScript", "is", "fun"];
    document.getElementById("unjoined").textContent = `Unjoined String: ${myArray}`;
    const joinedString = myArray.join(" "); 
    
    document.getElementById("result").textContent = `Joined String: ${joinedString}`;
}
