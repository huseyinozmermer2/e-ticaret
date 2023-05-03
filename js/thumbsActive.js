//! Resim active start
(function thumbsActive() {
    const thumbs = document.querySelectorAll("#single-image2 .img-fluid");
    const singleImage = document.querySelector("#single-image");
    thumbs.forEach((item) => {
        item.addEventListener("click", () => {
            thumbs.forEach((image) => {
                image.classList.remove("active");
            });
            singleImage.src = item.src;
            item.classList.add("active");
        });
    });
})();
//! Resim active end

//! resim zoom start
(function zoomFunc() {
    const singleImage = document.querySelector("#single-image");
    const singleImageWrapper = document.querySelector(".single-image-wrapper");
    singleImageWrapper.addEventListener("mousemove", (e) => {
        const x = e.clientX - e.target.offsetLeft;
        const y = e.clientY - e.target.offsetTop;

        singleImage.style.transformOrigin = `${x}px ${y}px`;
        singleImage.style.transform = "scale(3)";
    });
    singleImageWrapper.addEventListener("mouseleave", (e) => {
        singleImage.style.transform = "scale(1)";
    });
})();
//! resim zoom end

//! Renk start
(function color() {
    const colors = document.querySelectorAll(".color-wrapper");
    colors.forEach((color) => {
        //color.classList.remove("active");
        color.addEventListener("click", () => {
            colors.forEach((item) => {
                item.classList.remove("active");
            });
            color.classList.add("active");
        });
    });
})();
//! Renk end

//!Tab buton start
(function tabsFunc() {
    const btnTab = document.querySelectorAll(".tab-button");
    const contentDOM = document.querySelectorAll(".content");
    const tabsWrapperDOM = document.querySelector(".tab-list");

    tabsWrapperDOM.addEventListener("click", function (e) {
        e.preventDefault();
        const id = e.target.dataset.id;
        if (id) {
            btnTab.forEach((button) => button.classList.remove("active"));
            e.target.classList.add("active");
            contentDOM.forEach((content) => content.classList.remove("active"));
            console.log(id);
            const element = document.getElementById(id);
            element.classList.add("active");
        }
    });
})();
//!Tab buton start

//! star start
(function () {
    const commentStarsDOM = document.querySelectorAll(
        ".comment-form-rating .star"
    );

    commentStarsDOM.forEach((item) => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            commentStarsDOM.forEach((star) => star.classList.remove("active"));
            item.classList.add("active");
        });
    });
})();
//! star end


new Glide('.product-carousel5', {
    type: 'carousel',
    perView: 4,
    gap: 20,
    autoplay: 3000,
    breakpoints: {
        992: {
            perView: 3,
        },
        768: {
            perView: 2,
        },
        576: {
            perView: 1,
        }
    }
}).mount();
