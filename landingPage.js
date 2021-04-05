const objectHarta = document.getElementsByClassName('hartaImg')[0]
const judAlba = objectHarta.getElementsByClassName('sm_state_RO1')[0]
console.log(judAlba);

judAlba.onclick = function() {
    location.href = '/judet/Alba';
}