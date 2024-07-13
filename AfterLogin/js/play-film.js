//film video page
let playButtom = document.querySelector(".play-movie-button");
let video = document.querySelector(".video-container");
let movievideo = document.querySelector("#movievideo");
let closeButton = document.querySelector(".close-video");

playButtom.onclick = () => {
    video.classList.add("show-video");
    movievideo.play();
};

closeButton.onclick = () => {
    video.classList.remove("show-video");
    movievideo.pause();
};

//play trailer

let playTrailerButtom = document.querySelector(".play-trailer-button");
let trailer = document.querySelector(".trailer-container");
let trailervideo = document.querySelector("#trailerideo");
let closeTrailerbutton = document.querySelector(".close-trailer");

playTrailerButtom.onclick = () => {
    trailer.classList.add("show-video");
    trailervideo.play();
};

closeTrailerbutton.onclick = () => {
    trailer.classList.remove("show-video");
    trailervideo.pause();
};