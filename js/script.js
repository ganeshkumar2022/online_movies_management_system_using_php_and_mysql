$(document).ready(function(){
    $("#passshow").click(function(){
    if($(this).hasClass("fa-eye-slash"))
    {
      $(this).removeClass("fa-eye-slash");
      $(this).addClass("fa-eye");
      $("#pass").attr("type","text");
    }
    else
    {
      $(this).removeClass("fa-eye");
      $(this).addClass("fa-eye-slash");
      $("#pass").attr("type","password");
    }
    });
});