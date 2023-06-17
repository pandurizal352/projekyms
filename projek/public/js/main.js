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

    // Course-List Event
// Select the element you want to animate
$('.course-list').on('click',function(){
    const element = $(this);
    const arrow = element.find('#arrow');
    if(element.hasClass('active')){
        // Get the target height
        element.animate({
            height:'60px',
            backgroundColor: 'blue',
        },50);
        element.removeClass('active')
        arrow.removeClass('fa-caret-up')
        arrow.addClass('fa-caret-down')      
      
        // Apply transition properties
        element.css({
          'background': 'rgb(17,63,226)',
          'background' : 'linear-gradient(124deg, rgba(17,63,226,1) 39%, rgba(0,168,255,1) 97%)',
          'color':'white',
          'font-weight': '700',
          'letter-spacing':'1.5px',
          'transition': 'all 1s ease'
        });
    }else {
        element.addClass('active')
        arrow.removeClass('fa-caret-down')
        arrow.addClass('fa-caret-up')      
      
        // Get the target height
        const targetHeight = element[0].scrollHeight;
      
        // Apply transition properties
        element.css({
          'height': targetHeight,
          'background': 'white',
          'color':'black',
          'letter-spacing':'1px',
          'font-weight': '700!important',
          'transition': 'height 1s ease'
        });
      
        // After the transition is complete, reset the height to "auto"
        setTimeout(function() {
          element.css('height', 'auto');
        }, 1000); // Adjust the duration to match the transition duration
    }
})
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
}
// Button Animate
const animate = (btnClass)=>{
    $(btnClass).addClass('btn-animate');
    setTimeout(()=>{
        $(btnClass).removeClass('btn-animate');
    },600)
}