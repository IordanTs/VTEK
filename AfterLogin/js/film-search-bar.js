//film search

const filmlist = document.getElementById('film-list');
const filmsearchBar = document.getElementById('film-searchBar');
let allfilms = [];

filmsearchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.toLowerCase();

    const filmsFiltered = allfilms.filter((film) => {
        return (
            film.name.toLowerCase().includes(searchString) ||
            film.category.toLowerCase().includes(searchString)
        );
    });
    displayfilms(filmsFiltered);
});

const loadfilms = async() => {
    try {
        const res = await fetch('JSON/search-film.json');
        allfilms = await res.json();
        displayfilms(allfilms);
    } catch (err) {
        console.error(err);
    }
};

const displayfilms = (films) => {
    const htmlString = films
        .map((film) => {
            return `
            <li class="videos-style">
                <a href="${film.link}"><h2>${film.name}</h2></a>
                <p>Жанр: ${film.category}</p>
                <img src="${film.image}"></img>
            </li>
        `;
        })
        .join('');
    filmlist.innerHTML = htmlString;
};

loadfilms();