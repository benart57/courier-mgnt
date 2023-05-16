const approvedListBtn = document.querySelector("#proved");

const approvedListsForm = document.querySelector(".approved__table");
const daboard = document.querySelector(".main");

approvedListsForm.style.display = "none";

approvedListBtn.addEventListener("click", () => {
  approvedListsForm.style.display = "block";
  daboard.style.display = "none";
});
