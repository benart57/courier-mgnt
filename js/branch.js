const branchBtn = document.querySelector("#branch");
const branchForm = document.querySelector(".branch_section");

branchForm.style.display = "none";

branchBtn.addEventListener("click", () => {
  const closeBtn = document.querySelector(".branchBtn");
  branchForm.style.display = "block";
  const branchFormContainer = document.querySelector(".branch__container");
  branchFormContainer.classList.add("send_form_container");
  branchForm.classList.toggle("send_package_btn");

  closeBtn.addEventListener("click", () => {
    branchFormContainer.style.display = "none";
    branchBtn.classList.remove("send_package_btn");
  });
});
