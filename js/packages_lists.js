const listsBtn = document.querySelector("#lists");
const listsForm = document.querySelector(".sends__table");
const dasboard = document.querySelector(".main");

listsForm.style.display = "none";

listsBtn.addEventListener("click", () => {
  listsForm.style.display = "block";
  dasboard.style.display = "none";
});
