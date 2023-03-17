import * as commonFunc from '../../js/common.js';

document.addEventListener ("DOMContentLoaded", () => {
    window.onscroll = function() {
        commonFunc.upButtonVisibility();
    };

    document.addEventListener('click', commonFunc.scrollTop.bind(this));
    document.addEventListener('click', commonFunc.hamburgerMenuClick.bind(this));
    document.addEventListener('click', commonFunc.closeFormAlert.bind(this));

    document.querySelector('header a.contakt').classList.add('active');
});

