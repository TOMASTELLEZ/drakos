document.getElementById("get-points").addEventListener("click", function() {
    let pointsElement = document.getElementById("points");
    let currentPoints = parseInt(pointsElement.innerText);
    pointsElement.innerText = currentPoints + 10;
});
