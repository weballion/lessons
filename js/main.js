
function logOut() {
    //console.log('Click');
    let answer = confirm('Выйти из системы?');
    if (answer) {
        let logoutLink = document.getElementById('linkId');
        if(logoutLink) {
            logoutLink.setAttribute('href', '/?session=off');
        }
    }
    else {
        //console.log('Отмена выхода');
    }
}