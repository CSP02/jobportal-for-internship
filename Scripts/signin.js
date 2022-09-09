window.onload = ()=>{
    adapt();
    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder =>{
            holder.remove();
        })
    }, 3000);
}