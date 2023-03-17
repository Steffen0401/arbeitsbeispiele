import * as commonFunc from '../../js/common.js';

document.addEventListener ("DOMContentLoaded", () => {
    window.onscroll = function() {
        commonFunc.upButtonVisibility();
    };

    document.addEventListener('click', commonFunc.scrollTop.bind(this));
    document.addEventListener('click', commonFunc.hamburgerMenuClick.bind(this));
    document.addEventListener('click', informationClick.bind(this));
    document.addEventListener('click', closeBigInformationArticle.bind(this));
});

/**
 * vergrößert die Informationsartikel
 * @param {Event} event 
 */
function informationClick(event) {
    if (!event.target.closest('h3'))
        return;

    var informationContainer = event.target.closest('div.informationArticle'),
        informationBg = document.querySelector('.bigInformationBg');

        informationBg.classList.add('show');

    informationContainer.classList.remove('smallArticle');
    informationContainer.classList.add('bigArticle');

    document.body.style.overflowY = "hidden";
}


/**
 * verkleinert die Informationsartikel
 * @param {Event} event 
 */
function closeBigInformationArticle(event) {
    if (!event.target.closest('.closeArtikel'))
    return;

    var informationContainer = event.target.closest('div.informationArticle'),
    informationBg = document.querySelector('.bigInformationBg');

    informationBg.classList.remove('show');

    informationContainer.classList.remove('bigArticle');
    informationContainer.classList.add('smallArticle');

    document.body.style.overflowY = "auto";
}