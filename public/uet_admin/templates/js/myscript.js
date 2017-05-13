$(document).ready(function () {
   $(".result_msg").delay(2000).slideUp();
   $(".error_msg").delay(5000).slideUp();
});
function confirmDel(msg) {
   return confirm(msg);
}
function myAlert(){
   return alert('Chức năng này chưa được phát triển');
}