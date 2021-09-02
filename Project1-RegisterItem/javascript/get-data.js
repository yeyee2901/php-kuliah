const confirmButton = document.querySelector('#confirm-button')

confirmButton.addEventListener("click", () => {
  // Get data
  const email = document.querySelector("#email").value
  const nama = document.querySelector("#nama").value
  const domisili = document.querySelector("#domisili").value

  const modalTitle = document.querySelector(".modal-title")
  const modalBody = document.querySelector(".modal-body")
  const modalFooter = document.querySelector(".modal-footer")

  // cek apakah user memasukkan field kosong
  // jika field input ada yang kosong, maka modal-content = ERROR
  if (email.length < 1 || nama.length < 1 || domisili.length < 1) {
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
  // jika user mengisi semua input field, maka content modal = CONFIRMATION
  else {
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
})
