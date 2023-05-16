const customerListBtn = document.querySelector("#lists_customer");

const customerListsForm = document.querySelector(".customer__table");
const dashboard = document.querySelector(".main");

customerListsForm.style.display = "none";

customerListBtn.addEventListener("click", () => {
  customerListsForm.style.display = "block";
  dashboard.style.display = "none";
});
