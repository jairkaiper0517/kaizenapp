$(document).ready(function() {
  
});


var btnHansei = document.getElementById('btnHansei');
btnHansei.addEventListener('click', function(e) {
    encuesta();
});

function encuesta(){

console.log("encuesta");

 const {value: accept} = await swal({
  title: 'Terms and conditions',
  input: 'checkbox',
  inputValue: 1,
  inputPlaceholder:
    'I agree with the terms and conditions',
  confirmButtonText:
    'Continue <i class="fa fa-arrow-right></i>',
  inputValidator: function (result) {
    return !result && 'You need to agree with T&C'
  }
})

if (accept) {
  swal('You agreed with T&C :)')
}

}
