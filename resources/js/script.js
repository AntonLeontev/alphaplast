document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".menu-burger").addEventListener("click", () => {
        document.querySelector(".menu").classList.add("menu--active");
    });

    document.querySelector(".menu__btn-close").addEventListener("click", () => {
        document.querySelector(".menu").classList.remove("menu--active");
    });

    document.addEventListener("click", (event) => {
        if (event.target.matches(".btn-js")) {
            console.log("myModal");
            openModal("#myModal");
        }
    });

    const swiper2 = new Swiper(".schedule__slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-schedule-next",
            prevEl: ".swiper-button-schedule-prev",
        },
    });
    const swiper3 = new Swiper(".advantages__slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-advantages-next",
            prevEl: ".swiper-button-advantages-prev",
        },
    });
    const swiper1 = new Swiper(".reviews__slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            // when window width is >= 640px
            1240: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-reviews-next",
            prevEl: ".swiper-button-reviews-prev",
        },
    });

	const urlParams = new URLSearchParams(window.location.search);
	const category = urlParams.get('category');

	if (category) {
		showCategory(category);

		const input = document.getElementById("category-input");
        if (input) {
            input.value = category;
        } 
	}
});

async function closeModal(selector) {
    let myModalEl = document.querySelector(selector);
    let modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
    modal.hide();
}
async function openModal(selector) {
    let myModalEl = document.querySelector(selector);
    let modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
    modal.show();
}

document.querySelectorAll(".btn__item").forEach((el) => {
    el.addEventListener("click", (event) => {
        let id = event.target.dataset.id;
        showCategory(id);

		const input = document.getElementById('category-input');
		if (input) {
			input.value = id;
		} 
    });
});
document.querySelectorAll(".select__item").forEach((el) => {
    el.addEventListener("click", (event) => {
        let id = event.target.dataset.id;
        console.log(id);
        document
            .querySelectorAll(".catalog-content")
            .forEach((el) => el.classList.add("d-none"));
        document
            .querySelector(`.catalog-content${id}`)
            .classList.remove("d-none");
    });
});

function showCategory(id) {
	document
        .querySelectorAll(".catalog-content")
        .forEach((el) => el.classList.add("d-none"));
    document.querySelector(`.catalog-content${id}`).classList.remove("d-none");
}
