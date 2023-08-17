const e_name = document.getElementById('e_name')
const e_salary = document.getElementById('e_salary')
const e_dob = document.getElementById('e_dob')
const e_company = document.getElementById('e_company')
const e_form = document.getElementById('e_form')
const e_errorElement = document.getElementById('e_error')

e_form.addEventListener('submit', (e) => {
  let messages = []
  if (e_name.value === '' || e_name.value == null) {
    messages.push('Employee Name is required')
  }

  if (e_salary.value <= 1000 || e_salary.value >= 200000) {
    messages.push('Salary must be between 1,000 to 2,00,000')
  }

  if (e_dob.value === '' || e_dob.value == null) {
    messages.push('Date of Birth is required')
  }

  if (e_company.value === '' || e_company.value == null) {
    messages.push('Company Name is required')
  }


  if (messages.length > 0) {
    e.preventDefault()
    e_errorElement.innerText = messages.join(', ')
  }
})