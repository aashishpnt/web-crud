// const l_username = document.getElementById('username')
// const l_password = document.getElementById('password')
// const login_form = document.getElementById('login_form')
// const u_login_error = document.getElementById('u_login_error')
// const p_login_error = document.getElementById('p_login_error')

// login_form.addEventListener('submit', (e) => {
//   let messages = []
//   if (l_username.value === '' || l_username.value == null) 
//   {
//     messages.push('Username is required')
//     if (messages.length > 0) 
//     {
//       e.preventDefault()
//       u_login_error.innerText = messages.join(', ')
//     }
//   }
//   messages =[]
//   if (l_password.value <= 6) {
//     messages.push('Password must be greater than 6 words')
//     if (messages.length > 0) 
//     {
//       e.preventDefault()
//       p_login_error.innerText = messages.join(', ')
//     }
//   }
// })


const s_username = document.getElementById('s_username')
const s_password = document.getElementById('s_password')
const signup_form = document.getElementById('signup_form')
const u_signup_error = document.getElementById('u_signup_error')
const p_signup_error = document.getElementById('p_signup_error')

signup_form.addEventListener('submit', (e) => {
  let messages = []
  if (s_username.value === '' || s_username.value == null) 
  {
    messages.push('Username is required')
    if (messages.length > 0) 
    {
      e.preventDefault()
      u_signup_error.innerText = messages.join(', ')
    }
  }
  messages =[]
  if (s_password.value <= 6) {
    messages.push('Password must be greater than 6 words')
    if (messages.length > 0) 
    {
      e.preventDefault()
      p_signup_error.innerText = messages.join(', ')
    }
  }
})

