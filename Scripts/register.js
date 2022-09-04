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
    document.getElementById('cancel').addEventListener('click', ()=>{
        window.location = '/index.php';
    })

    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder =>{
            holder.remove();
            // window.location = '/Pages/register.php';
        })
    }, 3000);
}