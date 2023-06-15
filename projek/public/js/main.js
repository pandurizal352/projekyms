$(document).ready(function(){
    $('.list').hide();
    $('.fa-ellipsis').on('click',function(){
        $('.list').fadeToggle();
    })
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

    // Button Click
    $('.btn-login').on('click',()=>{
        animate('.btn-login')
    })
    $('.btn-login-2').on('click',()=>{
        animate('.btn-login-2')
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

function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    $('#simpan').on('click',function (e){
        e.preventDefault();
    })
}
// Button Animate
const animate = (btnClass)=>{
    $(btnClass).addClass('btn-animate');
    setTimeout(()=>{
        $(btnClass).removeClass('btn-animate');
    },600)
}