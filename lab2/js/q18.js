function calculateDays() {
    const date1 = document.getElementById("date1").value;
    const date2 = document.getElementById("date2").value;

    if (!date1 || !date2) {
        document.getElementById("result").textContent = "Please select both dates.";
        return;
    }

    const diffDays = dateDifference(date1, date2);

    document.getElementById("result").textContent =
        `Difference between the two dates: ${diffDays} day(s)`;
}

function dateDifference(date1, date2) {
    const d1 = new Date(date1);
    const d2 = new Date(date2);

    const diffTime = Math.abs(d2 - d1);
    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
}
