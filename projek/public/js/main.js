$(document).ready(function(){
    $('.login-container').hide()
    $(".btn-login").on('click', function (){
        $('.login-container').fadeToggle()
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
    $('.btn-login').on('click',()=>{
        animate('.btn-login')
    })
    $('.btn-login-2').on('click',()=>{
        animate('.btn-login-2')
    })
})

const animate = (btnClass)=>{
    $(btnClass).addClass('animate');
    setTimeout(()=>{
        $(btnClass).removeClass('animate');
    },600)
}