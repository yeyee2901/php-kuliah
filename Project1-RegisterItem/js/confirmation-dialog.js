const confirmButton = document.querySelector('#confirm-button')

confirmButton.addEventListener("click", () => {

  const email = document.querySelector("#email").value
  const nama = document.querySelector("#nama").value
  const domisili = document.querySelector("#domisili").value

  const modalDialog = {
    modalTitle: document.querySelector(".modal-title"),
    modalBody: document.querySelector(".modal-body"),
    modalFooter: document.querySelector(".modal-footer")
  }

  // cek apakah user memasukkan field kosong
  // jika ada yang kosong, maka modal content = error
  if (email.length < 1 || nama.length < 1 || domisili.length < 1) {
    setModalContents(modalDialog)
  }
  // jika user mengisi semua input field, maka isi modal dialog nya 
  else {
    setModalContents(modalDialog, { email, nama, domisili })
  }
})








// Helper function
/** @function setModalContents
* @brief helper function to set modal dialog content
* @param modalDialog, target modal dialog element to be set, consisting of { modalTitle, modalBody, modalFooter }
* @param content, actual content { email, nama, domisili }, displays ERROR if null / undefined
* @return void
* */
const setModalContents = function(modalDialog, content) {
  const { modalTitle, modalBody, modalFooter } = modalDialog

  if (!content) {
    modalTitle.innerHTML = `
      <h5>ERROR</h5>
    `

    modalBody.innerHTML = `
      <p style="color: red;">Field ada yang kosong!</p>
    `

    modalFooter.innerHTML = `
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        OK
      </button>
    `
  }
  else {
    const { email, nama, domisili } = content
    modalTitle.innerHTML = `
      <h5>Confirmation</h5>
    `

    modalBody.innerHTML = `
      Anda yakin ingin menambahkan data berikut?
      <ul>
        <li>Email: ${email}</li>
        <li>Nama: ${nama}</li>
        <li>Domisili: ${domisili}</li>
      </ul>
    
    `

    modalFooter.innerHTML = `
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        Cancel
      </button>
      <button type="submit" class="btn btn-primary" name="register" id="register">
        Register
      </button>
    `
  }
}
