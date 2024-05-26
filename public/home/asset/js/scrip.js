// const sliderItem = document.querySelectorAll('.slider-item')

// for (let index = 0; index < sliderItem.length; index++) {
//     sliderItem [index].style.left = index * 100 + "%"

// }
// const sliderItems = document.querySelector('.slider-items');
// const arrowRight = document.querySelector(".ri-arrow-right-line");
// const arrowLeft = document.querySelector(".ri-arrow-left-line");
// let i =0;
// let currentIndex = 0;
// const totalSlides = document.querySelectorAll('.slider-item').length;
// if(arrowRight != null && arrowLeft != null){
//     arrowRight.addEventListener('click', () => {
//         currentIndex = (currentIndex + 1) % totalSlides;
//         sliderItems.style.transform = `translateX(-${currentIndex * 100}%)`;
//     });

//     arrowLeft.addEventListener('click', () => {
//         currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
//         sliderItems.style.transform = `translateX(-${currentIndex * 100}%)`;
//     });
// }

// setInterval(autoSlider,4000)
// function sliderMove(){}
//function autoSlider(){

    // if (sliderItems) {
    //     // Kiểm tra xem sliderItems có tồn tại không
    //     if (i < sliderItem.length) {
    //         currentIndex = (currentIndex + 1) % totalSlides;
    //         sliderItems.style.transform = `translateX(-${currentIndex * 100}%)`;
    //     } else {
    //         currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    //         sliderItems.style.transform = `translateX(-${currentIndex * 100}%)`;
    //     }
    // } else {
    //     console.error("Không tìm thấy phần tử slider-items trong DOM.");
    // }
//}
//--------stikey header
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        document.querySelector('#header').classList.add('active');
    }
    else{
        document.querySelector('#header').classList.remove('active');
    }
    console.log(screenY)
});
//--------------click img detail

document.addEventListener("DOMContentLoaded", function() {
    const imgSmall = document.querySelectorAll('.product-detail-items img');
    const mainImg = document.querySelector('.main-img');

    if (imgSmall.length > 0 && mainImg) {
        imgSmall[0].classList.add('active');

        imgSmall.forEach((img) => {
            img.addEventListener('click', () => {
                // Gỡ bỏ lớp 'active' từ tất cả các ảnh nhỏ
                imgSmall.forEach((img) => {
                    img.classList.remove('active');
                });

                // Thêm lớp 'active' cho ảnh được click
                img.classList.add('active');

                // Hiển thị ảnh tương ứng trong mainImg
                mainImg.src = img.src;
            });
        });
    } else {
        console.log("Không tìm thấy phần tử .product-detail-items img hoặc .main-img trong DOM trên trang này");
    }
    });

// document.addEventListener("DOMContentLoaded", function() {
//     const countElement = document.querySelector(".value-input");
//     const minusButton = document.querySelector(".minus");
//     const plusButton = document.querySelector(".plus");

//     // Kiểm tra sự tồn tại của các phần tử
//     if (countElement && minusButton && plusButton) {
//         let count = 1;

//         minusButton.addEventListener("click", function() {
//             if (count > 1) {
//                 count--;
//                 updateCount();
//             }
//         });

//         plusButton.addEventListener("click", function() {
//             count++;
//             updateCount();
//         });

//         function updateCount() {
//             countElement.textContent = count;
//         }
//     } else {
//         console.log("Không tìm thấy phần tử .count, .minus hoặc .plus trong DOM");
//     }
// });

const flus = document.querySelectorAll(".flus");
const subtraction = document.querySelectorAll(".subtraction");
const valueinput = document.querySelectorAll(".value-input");
let v = 1;
for (let index = 0; index < subtraction.length; index++) {
    flus[index].addEventListener("click", () => {
        inputValue = valueinput[index].value;
        inputValue++;
        valueinput[index].value = inputValue;
        // v++;
    });
    subtraction[index].addEventListener("click", () => {
        inputValue = valueinput[index].value;
        if (inputValue <= 1) {
            return false;
        } else {
            inputValue--;
            valueinput[index].value = inputValue;
        }
    });
}
