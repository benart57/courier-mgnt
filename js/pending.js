const pendingListBtn = document.querySelector("#pending");

const pendingListsForm = document.querySelector(".pending__table");
const boarddash = document.querySelector(".main");

pendingListsForm.style.display = "none";

pendingListBtn.addEventListener("click", () => {
  pendingListsForm.style.display = "block";
  boarddash.style.display = "none";
});
