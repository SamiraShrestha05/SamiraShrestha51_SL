
document.getElementById("addRowBtn").addEventListener("click", function () {

    let tableBody = document.querySelector("#productTable tbody");
    let lastRow = document.querySelector("#productTable tbody tr:last-child");

   
    let newRow = lastRow.cloneNode(true);

    
    newRow.querySelector("select").selectedIndex = 0;
    newRow.querySelector("input").value = "";

  
    tableBody.appendChild(newRow);

    updateRowNumbers();
});


document.addEventListener("click", function (e) {
    if (e.target.classList.contains("deleteRow")) {

        let row = e.target.closest("tr");

        let totalRows = document.querySelectorAll("#productTable tbody tr").length;
        if (totalRows > 1) {
            row.remove();
            updateRowNumbers();
        }
    }
});


function updateRowNumbers() {
    let rows = document.querySelectorAll("#productTable tbody tr");
    rows.forEach((row, index) => {
        row.querySelector(".row-no").textContent = index + 1;
    });
}
