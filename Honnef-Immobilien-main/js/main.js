import * as commonFunc from './common.js';


document.addEventListener ("DOMContentLoaded", () => {
    window.onscroll = function() {
        commonFunc.upButtonVisibility();
    };

    document.addEventListener('click', commonFunc.scrollTop.bind(this));
    document.addEventListener('click', commonFunc.hamburgerMenuClick.bind(this));
    document.addEventListener('click', commonFunc.disturbanceClick.bind(this));
    // document.addEventListener('mouseover', disturbanceHover.bind(this));
    // document.addEventListener('mouseout', disturbanceHover.bind(this));
});