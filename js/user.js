const userBtn = document.querySelector("#user");
const userForm = document.querySelector(".user_section");
const input = document.querySelector("input");

userForm.style.display = "none";

userBtn.addEventListener("click", () => {
  const closeBtn = document.querySelector(".userBtn");
  userForm.style.display = "block";
  const userFormContainer = document.querySelector(".user__container");
  userFormContainer.classList.add("send_form_container");
  userForm.classList.toggle("send_package_btn");

  closeBtn.addEventListener("click", () => {
    userFormContainer.style.display = "none";
    userBtn.classList.remove("send_package_btn");
  });
});
