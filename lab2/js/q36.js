
function setCookie() {
    const key = document.getElementById("key").value.trim();
    const value = document.getElementById("value").value.trim();

    if (key === "" || value === "") {
        document.getElementById("output").innerHTML = "Key and Value cannot be empty!";
        return;
    }

    document.cookie = `${key}=${value}; path=/`;
    document.getElementById("output").innerHTML = `Cookie stored: ${key} = ${value}`;
}



function readCookie() {
    const key = document.getElementById("key").value.trim();
    const cookies = document.cookie.split("; ");

    for (let c of cookies) {
        let [k, v] = c.split("=");
        if (k === key) {
            document.getElementById("output").innerHTML = `Value for "${key}" = ${v}`;
            return;
        }
    }
    document.getElementById("output").innerHTML = `No cookie found with key: ${key}`;
}



function displayAllCookies() {
    const cookies = document.cookie.split("; ");
    let html = "<table><tr><th>Key</th><th>Value</th></tr>";

    cookies.forEach(c => {
        let [k, v] = c.split("=");
        html += `<tr><td>${k}</td><td>${v}</td></tr>`;
    });

    html += "</table>";
    document.getElementById("cookieTable").innerHTML = html;
}



function deleteCookie() {
    const key = document.getElementById("key").value.trim();

    if (key === "") {
        document.getElementById("output").innerHTML = "Enter a key to delete.";
        return;
    }

    document.cookie = `${key}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`;
    document.getElementById("output").innerHTML = `Deleted cookie: ${key}`;
}


function deleteAllCookies() {
    const cookies = document.cookie.split("; ");

    cookies.forEach(c => {
        let [k] = c.split("=");
        document.cookie = `${k}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`;
    });

    document.getElementById("output").innerHTML = "All cookies deleted!";
    document.getElementById("cookieTable").innerHTML = "";
}
