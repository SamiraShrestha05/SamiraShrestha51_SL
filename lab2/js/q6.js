function daysUntilChristmas() {
    const today = new Date();
    const year = today.getFullYear();
    let christmas = new Date(year, 11, 25); 

    if (today > christmas) {
        christmas = new Date(year + 1, 11, 25);
    }

    const diffTime = christmas - today;
    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
}

function showDays() {
    const days = daysUntilChristmas();
    document.getElementById("result").textContent =
        `There are ${days} day(s) left until next Christmas!`;
}
