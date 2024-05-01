const newMsgBtn = document.getElementById("new-msg-btn"),
  newMsgModal = document.getElementById("new-msg-modal"),
  closeModalBtn = document.getElementById("close-modal-btn");

newMsgBtn.addEventListener("click", () => {
  newMsgModal.showModal();
});

closeModalBtn.addEventListener("click", () => {
  newMsgModal.close();
});
