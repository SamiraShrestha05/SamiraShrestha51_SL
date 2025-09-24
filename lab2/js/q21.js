function showWeekend() {
    const dateInput = document.getElementById("date").value;
    const weekend = getWeekend(dateInput || new Date());

    document.getElementById("result").innerHTML =
        `Saturday: ${weekend.saturday}<br>Sunday: ${weekend.sunday}`;
}

function getWeekend(date) {
    const d = new Date(date);
    const day = d.getDay(); 

    const saturday = new Date(d);
    saturday.setDate(d.getDate() + (6 - day));

    const sunday = new Date(d);
    sunday.setDate(d.getDate() + (7 - day));

    return {
        saturday: saturday.toDateString(),
        sunday: sunday.toDateString()
    };
}
