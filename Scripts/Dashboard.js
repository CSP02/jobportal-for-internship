window.onload = () => {
    adapt();
    const buttons = [...document.getElementById('menu').getElementsByClassName('buttons')]
    buttons.forEach(button => {
        button.addEventListener('click', (clicked) => {
            buttons.forEach(butt => {
                if (butt == clicked.path[0]) {
                    butt.className = 'active'
                } else {
                    butt.className = 'inactive'
                }
            })
        })
    })

    const postJob = document.getElementById('postJob');
    const postJobForm = document.getElementById('postJobForm');
    if (postJob)
        postJob.addEventListener('click', () => {
            postJobForm.style.visibility = 'visible';
            postJobForm.style.overflowY = 'hidden';
            postJobForm.style.height = 'max-content';
            postJobForm.style.position = 'relative';
        })

    const cancelPosting = document.getElementById('cancelAndRefresh');
    if (cancelPosting)
        cancelPosting.addEventListener('click', () => {
            postJobForm.style.visibility = 'hidden';
            postJobForm.style.overflowY = 'scroll';
            postJobForm.style.height = '0';
            postJobForm.style.position = 'absolute';
        })

    const applicantsButton = document.getElementById('applicants');
    const yourPostings = document.getElementById('yourJobs');
    if (applicantsButton)
        applicantsButton.addEventListener('click', () => {
            const appliedDetails = document.getElementById('appliedDetails');
            const details = document.getElementById('details');
            details.style.visibility = 'hidden';
            appliedDetails.style.visibility = 'visible';
            appliedDetails.style.zIndex = 3;
            details.style.zIndex = 1;
            applicantsButton.className = applicantsButton.className.replace('inactive', 'active');
            yourPostings.className = yourPostings.className.replace('active', 'inactive');
        })

    if (yourPostings)
        yourPostings.addEventListener('click', () => {
            const appliedDetails = document.getElementById('appliedDetails');
            const details = document.getElementById('details');
            details.style.visibility = 'visible';
            appliedDetails.style.visibility = 'hidden';
            appliedDetails.style.zIndex = 1;
            details.style.zIndex = 3;
            yourPostings.className = yourPostings.className.replace('inactive', 'active');
            applicantsButton.className = applicantsButton.className.replace('active', 'inactive');
        })

    const adminMenu = document.getElementById('admin_menu');
    const toggler = new Toggler;
    adminMenu.addEventListener('click', () => {
        toggler.toggleSlide('sidebar', 'left', 0.6)
        toggler.toggleClass('sidebarMenu', 'fa-chevron-right', 'fa-xmark')
    })

    setTimeout(() => {
        [...document.getElementsByClassName('infoHolder')].forEach(holder => {
            holder.remove();
            window.location = '/Pages/signin.php';
        })
    }, 3000);
}