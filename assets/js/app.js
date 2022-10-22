const startBtn = document.getElementById('startBtn');
const chooseRole = document.getElementsByClassName('choose-role');
const signupBtn = document.getElementById('signupBtn');
const roleTaxiDriver = document.getElementById('role--taxiDriver');
const rolePassenger = document.getElementById('role--passenger');


// Signup page - choose role

roleTaxiDriver.addEventListener('click', () => {
    roleTaxiDriver.classList.remove('border-secondary');
    roleTaxiDriver.classList.add('border-success', 'border-2');
    rolePassenger.classList.remove('border-success', 'border-2');
    signupBtn.classList.remove('disabled');

});

rolePassenger.addEventListener('click', () => {
    rolePassenger.classList.remove('border-secondary');
    rolePassenger.classList.add('border-success', 'border-2');
    roleTaxiDriver.classList.remove('border-success', 'border-2');
    signupBtn.classList.remove('disabled');

});


signupBtn.addEventListener('click', () => {
    if(roleTaxiDriver.classList.contains('border-success')){
        window.location.href = 'driverSignup.php';
    } else if(rolePassenger.classList.contains('border-success')){
        window.location.href = 'passengerSignUp.php';
    }
});

//limit upload files

// var limitUploadFile = function onSelect(e) {
//     if (e.files.length > 5) {
//         alert("Only 5 files accepted.");
//         e.preventDefault();
//     }
// }
