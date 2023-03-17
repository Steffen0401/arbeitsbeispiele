import * as commonFunc from '../../js/common.js';

document.addEventListener ("DOMContentLoaded", () => {
    window.onscroll = function() {
        commonFunc.upButtonVisibility();
    };

    document.addEventListener('click', commonFunc.scrollTop.bind(this));
    document.addEventListener('click', commonFunc.hamburgerMenuClick.bind(this));
    document.addEventListener('click', commonFunc.closeFormAlert.bind(this));
    document.addEventListener('click', moreInfoFormBoxShow.bind(this));
    document.addEventListener('click', moreInfoFormBoxHide.bind(this));

});

/**
 * versteckt das mehr Informationen Formular
 * @param {Event} event
 */
function moreInfoFormBoxHide(event) {
    if (!event.target.closest('#realEstate #formBox i'))
        return;

    document.body.style.overflowY = 'auto'
    document.querySelector('#realEstate #formBox').classList.add('hide');
}

/**
 * zeigt das mehr Informationen Formular
 * @param {Event} event
 */
function moreInfoFormBoxShow(event) {
    if (!event.target.closest('#realEstate #moreInfo a'))
        return;

        document.body.style.overflowY = 'hidden'
    document.querySelector('#realEstate #formBox').classList.remove('hide');
}