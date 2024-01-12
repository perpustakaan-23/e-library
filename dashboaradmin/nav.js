

const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});

var swiper = new Swiper(".portofolio-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

// PROFILE
function previewImage() {
    var fileInput = document.getElementById("fotoProfil");
    var imagePreview = document.getElementById("imagePreview");

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
}
