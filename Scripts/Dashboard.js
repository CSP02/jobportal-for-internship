window.onload = () => {
    const buttons = [...document.getElementById('menu').getElementsByTagName('li')]
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

    const cancelPosting = document.getElementById('cancel');
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
        appliedDetails.style.zIndex = '2';
        details.style.zIndex = '1';
    })

    const yourPostings = document.getElementById('yourJobs');
    yourPostings.addEventListener('click', ()=>{
        const appliedDetails = document.getElementById('appliedDetails');
        const details = document.getElementById('details');
        appliedDetails.style.zIndex = '1';
        details.style.zIndex = '2';
    })
}