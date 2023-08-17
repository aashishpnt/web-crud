const c_name = document.getElementById('c_name')
const c_address = document.getElementById('c_address')
const c_form = document.getElementById('c_form')
const c_errorElement = document.getElementById('c_error')

c_form.addEventListener('submit', (e) => {
  let messages = []
  if (c_name.value === '' || c_name.value == null) {
    messages.push('Company Name is required')
  }

  if (c_address.value === '' || c_address.value == null) {
    messages.push('  Company address is required')
  }


  if (messages.length > 0) {
    e.preventDefault()
    c_errorElement.innerText = messages.join(', ')
  }
})