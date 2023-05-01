const addStudent = document.getElementById("addStudent")
const addStudentForm = document.getElementById("addStudentForm")
const modal = document.getElementById("modal")
const close = document.querySelector(".close")

addStudent.addEventListener("click", () => {
  modal.classList.remove("hide")
  addStudentForm.classList.remove("hide")
})

close.addEventListener("click", () => {
  modal.classList.add("hide")
  addStudentForm.classList.add("hide")
})
