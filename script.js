const sectionSendPackage = document.querySelector(".form_send_package");
const sendPackageBtn = document.querySelector("#send_package");

sectionSendPackage.style.display = "none";

sendPackageBtn.addEventListener("click", (event) => {
  const closeBtn = document.querySelector(".closeBtn");
  sectionSendPackage.style.display = "block";
  const sendFormContainer = document.getElementById("send_form_container");
  sendFormContainer.classList.add("send_form_container");
  sendPackageBtn.classList.toggle("send_package_btn");

  closeBtn.addEventListener("click", () => {
    sectionSendPackage.style.display = "none";
    sendPackageBtn.classList.remove("send_package_btn");
  });
});