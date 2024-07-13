//video search
const VideoList = document.getElementById('video-list');
const searchBar = document.getElementById('vodeos-searchBar');
let allvideos = [];

searchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.toLowerCase();

    const videosFiltered = allvideos.filter((video) => {
        return (
            video.name.toLowerCase().includes(searchString) ||
            video.category.toLowerCase().includes(searchString) ||
            video.chenal.toLowerCase().includes(searchString)
        );
    });
    displayvideos(videosFiltered);
});

const loadvideos = async() => {
    try {
        const res = await fetch('JSON/search-video.json');
        allvideos = await res.json();
        displayvideos(allvideos);
    } catch (err) {
        console.error(err);
    }
};

const displayvideos = (videos) => {
    const htmlString = videos
        .map((video) => {
            return `
            <li class="videos-style">
                <a href="${video.link}"><h2>${video.name}</h2></a>
                <p>Канал: ${video.chenal}</p>
                <p>Категория: ${video.category}</p>
                <img src="${video.image}"></img>
            </li>
        `;
        })
        .join('');
    VideoList.innerHTML = htmlString;
};

loadvideos();