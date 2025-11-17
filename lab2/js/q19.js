document.getElementById("ageForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const dobInput = document.getElementById("dob").value;
    if (!dobInput) {
        document.getElementById("result").textContent = "Please select a date of birth.";
        return;
    }

    const age = calculateAge(dobInput);

    document.getElementById("result").textContent = `Your age is ${age} year(s).`;
});

function calculateAge(dob) {
    const birthDate = new Date(dob);
    const today = new Date();

    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    const dayDiff = today.getDate() - birthDate.getDate();

    
    if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
        age--;
    }

    return age;
}
