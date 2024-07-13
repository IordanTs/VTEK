//slide bar for film page
const film_slidebar_arrow = document.querySelectorAll(".film-slidebar-arrow");
const film_list = document.querySelectorAll(".movie-list");

film_slidebar_arrow.forEach((arrow, i) => {
    const itemNumber = film_list[i].querySelectorAll("img").length;
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
        const ratio = Math.floor(window.innerWidth / 270);
        clickCounter++;
        if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
            film_list[i].style.transform = `translateX(${
            film_list[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
        } else {
            film_list[i].style.transform = "translateX(0)";
            clickCounter = 0;
        }
    });

    console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE (black / white)

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
    ".container,.movie-list-title,.navbar,.sidebar,.sidebar-text,.sidebar-icon,.toggle,.info,.col,.social-icons a,.copyright-line,.copyright,.link-element,.col .fa-solid,.underline,.email-id,form,.menu-list-item,.site-name,.movie-list-item-desc,.video-section2 hr,.video-section hr,.vid-info,.vid-info a,.email-text,.play-video-info,.publisher p,.publisher span,.hrozintal-line,.play-video hr,.vid-discription,.coment-text,.up-arrow,.category-container hr"
);

ball.addEventListener("click", () => {
    items.forEach((item) => {
        item.classList.toggle("active");
    });
    ball.classList.toggle("active");
});

//videо views

function videoViews(response) {
    document.querySelector("#views").textContent = response.value;
}

function videoViews2(response) {
    document.querySelector("#views2").textContent = response.value;
}

function videoViews3(response) {
    document.querySelector("#views3").textContent = response.value;
}

function videoViews4(response) {
    document.querySelector("#views4").textContent = response.value;
}

function videoViews5(response) {
    document.querySelector("#views5").textContent = response.value;
}

function videoViews6(response) {
    document.querySelector("#views6").textContent = response.value;
}

function videoViews7(response) {
    document.querySelector("#views7").textContent = response.value;
}

function videoViews8(response) {
    document.querySelector("#views8").textContent = response.value;
}

function videoViews9(response) {
    document.querySelector("#views9").textContent = response.value;
}

function videoViews10(response) {
    document.querySelector("#views10").textContent = response.value;
}

function videoViews11(response) {
    document.querySelector("#views11").textContent = response.value;
}

function videoViews12(response) {
    document.querySelector("#views12").textContent = response.value;
}