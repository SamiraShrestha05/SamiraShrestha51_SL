function getCurrentDateFormats() {
    const today = new Date();

    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const yyyy = today.getFullYear();

    const months = [
        "January","February","March","April","May","June",
        "July","August","September","October","November","December"
    ];
    const days = [
        "Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"
    ];

    return {
        mm_dd_yyyy: `${mm}-${dd}-${yyyy}`,
        mm_dd_yyyy_slash: `${mm}/${dd}/${yyyy}`,
        dd_mm_yyyy: `${dd}-${mm}-${yyyy}`,
        dd_mm_yyyy_slash: `${dd}/${mm}/${yyyy}`,
        longFormat: `${yyyy} ${months[today.getMonth()]} ${dd} ${days[today.getDay()]}`
    };
}

function showDate() {
    const formats = getCurrentDateFormats();
    document.getElementById("result").innerHTML =
        `mm-dd-yyyy : ${formats.mm_dd_yyyy}<br>` +
        `mm/dd/yyyy : ${formats.mm_dd_yyyy_slash}<br>` +
        `dd-mm-yyyy : ${formats.dd_mm_yyyy}<br>` +
        `dd/mm/yyyy : ${formats.dd_mm_yyyy_slash}<br>` +
        `yyyy month date day : ${formats.longFormat}`;
}
