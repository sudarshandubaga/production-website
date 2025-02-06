import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade"; // Import fade effect
import {
    Autoplay,
    Navigation,
    Pagination,
    EffectCoverflow,
} from "swiper/modules";

function openLightbox(videoId) {
    document.getElementById("lightbox").classList.remove("hidden");
    document.getElementById("lightbox").classList.add("flex");
    document.getElementById(
        "video-frame"
    ).src = `https://www.youtube.com/embed/${videoId}`;
}

function closeLightbox() {
    document.getElementById("lightbox").classList.add("hidden");
    document.getElementById("lightbox").classList.remove("flex");
    document.getElementById("video-frame").src = "";
}

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        modules: [Navigation, Pagination, Autoplay, EffectCoverflow],
        effect: "coverflow", // Add fade effect
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    new Swiper(".carousel", {
        modules: [Autoplay],
        loop: true,
        autoplay: {
            delay: 0,
            pauseOnMouseEnter: true,
            waitForTransition: true,
        },
        speed: 2000,
        spaceBetween: 20,
        freeMode: true,
        breakpoints: {
            800: {
                slidesPerView: 4,
            },
            0: {
                slidesPerView: 2.5,
            },
        },
    });

    new Swiper(".video-carousel", {
        modules: [Autoplay, Navigation, EffectCoverflow],
        effect: "coverflow",
        loop: true,
        autoplay: {
            delay: 3000,
            pauseOnMouseEnter: true,
            waitForTransition: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        centeredSlides: true,
        breakpoints: {
            800: {
                slidesPerView: 2,
                slidesPerGroup: 1,
                spaceBetween: 50,
            },
            0: {
                slidesPerView: 1.2,
                slidesPerGroup: 1,
                spaceBetween: 0,
            },
        },
    });

    new Swiper(".blog-carousel", {
        modules: [Autoplay, Navigation],
        loop: true,
        autoplay: {
            delay: 3000,
            pauseOnMouseEnter: true,
            waitForTransition: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 20,
        breakpoints: {
            800: {
                slidesPerView: 3,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    $(document).on("click", ".vLightbox", function (e) {
        e.preventDefault();
        let videoId = $(this).data("video");
        openLightbox(videoId);
    });

    $(document).on("click", ".closeVLightbox", function (e) {
        e.preventDefault();
        closeLightbox();
    });

    $(document).on("click", ".toggle-menu", function () {
        $(".navbar").toggleClass("active");
    });
});
