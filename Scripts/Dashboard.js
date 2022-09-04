window.onload = () => {
    const buttons = [...document.getElementById('menu').getElementsByClassName('buttons')]
    buttons.forEach(button => {
        button.addEventListener('click', (clicked) => {
            buttons.forEach(butt => {
                if (butt == clicked.path[0]) {
                    butt.className = 'active'
                }else{
                    butt.className = 'inactive'
                }
            })
        })
    })

    const postJob = document.getElementById('postJob');
    const postJobForm = document.getElementById('postJobForm');
    postJob.addEventListener('click', () => {
        postJobForm.style.visibility = 'visible';
        postJobForm.style.overflowY = 'hidden';
        postJobForm.style.height = 'max-content';
        postJobForm.style.position = 'relative';
    })

    const cancelPosting = document.getElementById('cancelAndRefresh');
    cancelPosting.addEventListener('click', ()=>{
        postJobForm.style.visibility = 'hidden';
        postJobForm.style.overflowY = 'scroll';
        postJobForm.style.height = '0';
        postJobForm.style.position = 'absolute';
    })

    const applicantsButton = document.getElementById('applicants');
    applicantsButton.addEventListener('click', ()=>{
        const appliedDetails = document.getElementById('appliedDetails');
        const details = document.getElementById('details');
        details.style.visibility = 'hidden';
        appliedDetails.style.visibility = 'visible';
    })

    const yourPostings = document.getElementById('yourJobs');
    yourPostings.addEventListener('click', ()=>{
        const appliedDetails = document.getElementById('appliedDetails');
        const details = document.getElementById('details');
        details.style.visibility = 'visible';
        appliedDetails.style.visibility = 'hidden';
    })

    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder =>{
            holder.remove();
            window.location = '/Pages/signin.php';
        })
    }, 3000);
}