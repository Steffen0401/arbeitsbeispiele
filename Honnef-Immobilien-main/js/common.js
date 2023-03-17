/**
 * zeigt oder versteckt up button
 */
export function upButtonVisibility() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        var upButton = document.querySelector('#upButton');
        upButton.classList.add('showUpButton');
    }
    else {
        var upButton = document.querySelector('#upButton');
        upButton.classList.remove('showUpButton');
    }
}

/**
 * scroll nach oben zum Anfang jeder Seite 
 * @param {Event} event
 */
export function scrollTop(event) {
    if (!event.target.closest('#upButton'))
        return;

    window.scrollTo({top: 0, behavior: 'smooth'});
}

/**
 * öffnet und schließt den Hamburgermenu in der mobilen ansicht 
 * @param {Event} event 
 */
export function hamburgerMenuClick(event) {
    if (!event.target.closest('header div i'))
        return;

    var headerNav = document.querySelector('header nav'),
        hamburgerIcon = document.querySelector('header div i');

    headerNav.classList.toggle('show');

    if (hamburgerIcon.classList.contains('fa-bars')) {
        hamburgerIcon.classList.remove('fa-bars');
        hamburgerIcon.classList.add('fa-times');
    }
    else {
        hamburgerIcon.classList.remove('fa-times');
        hamburgerIcon.classList.add('fa-bars');
    }
}

/**
 * schließ die Formualr alerts 
 * @param {Event} event 
 */
export function closeFormAlert(event) {
    if (event.target == document.querySelector('.formAlert i.fa-times')) {
        event.target.closest('main').classList.remove('showAlertBg', 'showErrFormAlert');
    } else if (event.target == document.querySelector('.formAlertBg')) {
        event.target.closest('main').classList.remove('showAlertBg', 'showErrFormAlert');
    }
}

/**
 * öffnet das Störungsmeldungsformular
 * @param {Event} event 
 */
export function disturbanceClick(event) {
    if (!event.target.closest('.disturbance'))
        return;

        window.open("http://honnef.immo/Stoerungsmeldung/", "_self");
}

