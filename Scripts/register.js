window.onload = ()=>{
    const password = document.getElementById('password')
    const confirmPassword = document.getElementById('confirmPass')
    confirmPassword.addEventListener('input', ()=>{
        if(confirmPassword.value != password.value){
            confirmPassword.style.border = '2px solid rgba(255, 45, 45, 0.6)'
        }else{
            confirmPassword.style.border = '2px solid rgba(104, 255, 45, 0.6)'
        }
    })
    document.getElementById('register').addEventListener('click', ()=>{
        evaluate()
    })
}

function evaluate(){
    const email = document.getElementById('username').value
    const passwordVal = document.getElementById('password').value
    const userType = document.getElementById('select').value
    let details

    details = {
        email: email,
        password: passwordVal,
        userType: userType
    }

    return alert(`Your details:\nE-mail: ${details.email}\nUser Type: ${details.userType}\n`)
}