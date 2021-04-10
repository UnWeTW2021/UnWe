const toggleButton = document.getElementsByClassName('headerContainer__toggleButton')[0]
const navBarLinks = document.getElementsByClassName('headerContainer__links')[0]

toggleButton.addEventListener('click', () => {
    navBarLinks.classList.toggle('active')
})