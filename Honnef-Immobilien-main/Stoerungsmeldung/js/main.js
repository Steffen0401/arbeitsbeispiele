import * as commonFunc from '../../js/common.js';

document.addEventListener ("DOMContentLoaded", () => {
    window.onscroll = function() {
        commonFunc.upButtonVisibility();
    };

    document.addEventListener('click', commonFunc.scrollTop.bind(this));
    document.addEventListener('click', commonFunc.hamburgerMenuClick.bind(this));
    document.addEventListener('click', commonFunc.closeFormAlert.bind(this));
    document.addEventListener('click', radioBtnClick.bind(this));

    checkRadioBtn();
});

/**
 * ruft die checkRadioBtn funktion auf beim click
 * @param {Event} event
 */
function radioBtnClick(event) {
    var radioBtn = event.target.closest('.radio');
    if (!radioBtn)
    return;

    checkRadioBtn();
}

/**
 * entscheidet ob das Maßnahmen Feld angezeigt wird 
 */
function checkRadioBtn() {
    var radioBtns = document.querySelectorAll('input.radio');

    radioBtns.forEach(radioBtn => {
        if (radioBtn.checked == true && radioBtn.id == 'yes') {
            document.querySelector('textarea#alreadyArranged').classList.remove('hide');
            document.querySelector('span.alreadyArrangedErrMessage').classList.remove('hide');
        } else {
            document.querySelector('textarea#alreadyArranged').classList.add('hide');
            if (document.querySelector('span.alreadyArrangedErrMessage')) {
                document.querySelector('span.alreadyArrangedErrMessage').classList.add('hide');
            }
        }
    });
}

// /**
//  * close the form alert box
//  * @param {Event} event 
//  */
// function closeFormAlert(event) {
//     if (event.target == document.querySelector('.formAlert i.fa-times')) {
//         event.target.closest('main').classList.remove('showAlertBg', 'showErrFormAlert');
//     } else if (event.target == document.querySelector('.formAlertBg')) {
//         event.target.closest('main').classList.remove('showAlertBg', 'showErrFormAlert');
//     }
// }

// function onSubmit(token) {
//     document.getElementById("submitButtonStörung").submit();
// }
