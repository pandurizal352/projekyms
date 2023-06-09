$(document).ready(function(){
    $('.login-container').hide()
    $(".btn-login").on('click', function (){
        $('.login-container').fadeToggle()
    })

    $(".list").hide()
    $(".fa-ellipsis").on('click',()=>{
        $(".list").fadeToggle()
    })
    // fa-regular click
    $('.fa-regular').on('click',()=>{
        $('.login-container').fadeOut();
    })
    $('.fa-eye-slash').on('click',()=>{
        $('.fa-eye-slash').addClass("d-none");
        $('.fa-eye').removeClass("d-none")
        const password = $('#Password').attr('type');
        if(password == "password"){
            $("#Password").attr('type', 'text');
        }
    })
    $('.fa-eye').on('click',()=>{
        $('.fa-eye').addClass("d-none");
        $('.fa-eye-slash').removeClass("d-none");
        const password = $('#Password').attr('type');
        if(password == "text"){
            $("#Password").attr('type', 'password');
        }
    })

    // Button Click
    $('.btn-login').on('click',()=>{
        animate('.btn-login')
    })
    $('.btn-login-2').on('click',()=>{
        animate('.btn-login-2')
    })

    // Upload Profile Picture 
    $(".pp-container").on('mouseenter',()=>{
        $(".upload-picture-btn").removeClass("d-none")
    })
    $(".pp-container").on('mouseleave',()=>{
        $(".upload-picture-btn").addClass("d-none")
    })

    // Conditional Time-Zone
    const currentTime = new Date();
    const currentHour = currentTime.getHours();
    if (currentHour < 10) {
        $(".time").html("Selamat Pagi");
      } else if (currentHour < 15) {
        $(".time").html("Selamat Siang");
      } else if (currentHour <= 17) {
        $(".time").html("Selamat Sore");
      } else {
        $(".time").html("Selamat Malam");
      }
})

// Button Animate
const animate = (btnClass)=>{
    $(btnClass).addClass('btn-animate');
    setTimeout(()=>{
        $(btnClass).removeClass('btn-animate');
    },600)
}