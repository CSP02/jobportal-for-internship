window.onload = ()=>{
    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder =>{
            holder.remove();
            // window.location = '/Pages/signin.php';
        })
    }, 3000);
}