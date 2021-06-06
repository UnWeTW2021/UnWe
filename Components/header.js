const toggleButton = document.getElementsByClassName('headerContainer__toggleButton')[0]
const navBarLinks = document.getElementsByClassName('headerContainer__links')[0]
let logoutBtn=document.getElementById("logout-btn")
let adminBtn=document.getElementById('admin-btn')
if(localStorage.getItem('token')!==null)
{
    logoutBtn.classList.remove("hidden")
    adminBtn.classList.remove("hidden")
}
else {
    if(!logoutBtn.classList.contains("hidden"))

        logoutBtn.classList.add("hidden")
    if(!adminBtn.classList.contains("hidden"))

       adminBtn.classList.add("hidden")
}



toggleButton.addEventListener('click', () => {
    navBarLinks.classList.toggle('active')
})

logoutBtn.addEventListener("click", ()=>{
    localStorage.removeItem('token')
    location.reload();
})
