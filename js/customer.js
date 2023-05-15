const customerBtn = document.querySelector("#customer");
const customerForm = document.querySelector(".customer_section");

customerForm.style.display = "none";

customerBtn.addEventListener("click", () => {
  const closeBtn = document.querySelector(".customerBtn");
  customerForm.style.display = "block";
  const customerFormContainer = document.querySelector(".customer__container");
  customerFormContainer.classList.add("send_form_container");
  customerForm.classList.toggle("send_package_btn");

  closeBtn.addEventListener("click", () => {
    customerFormContainer.style.display = "none";
    customerForm.classList.remove("send_package_btn");
  });
});
