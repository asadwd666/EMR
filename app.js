const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#signup.php");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("signup.php");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
