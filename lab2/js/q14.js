function sortArray() {
    var arr1 = [3, 8, 7, 6, 5, -4, 3, 2, 1];
    document.getElementById("unsorted").textContent =
        `Unsorted Array: ${arr1}`;
    arr1.sort(function(a, b) {
        return a - b;
    });

    document.getElementById("result").textContent =
        `Sorted Array: ${arr1.join(", ")}`;
}
