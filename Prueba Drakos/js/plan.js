document.addEventListener("DOMContentLoaded", () => {
    const payButtons = document.querySelectorAll(".pay-btn");
    const backButton = document.querySelector(".back-btn");

    payButtons.forEach(button => {
        button.addEventListener("click", () => {
            window.location.href = "../index/payment.php";
        });
    });

    backButton.addEventListener("click", () => {
        window.location.href = "perfil.php";
    });
});