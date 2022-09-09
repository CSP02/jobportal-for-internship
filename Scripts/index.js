window.onload = () => {
    adapt();
    const jobCards = [...document.getElementsByClassName('jobCard')]
    jobCards.forEach(jobCard => {
        jobCard.addEventListener('click', () => {
            console.log(jobCard)
        })
    });

    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder => {
            holder.remove();
        })
    }, 3000);
}