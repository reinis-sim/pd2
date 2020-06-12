// set up list delete buttons
function setupDeleteLinks() {

    let deleteLinks = document.querySelectorAll('a.link-delete');

    for (let link of deleteLinks) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            if (window.confirm('Vai tiešām vēlaties dzēst šo ierakstu?')) {
                location.assign(link.href);
            }
        });
    }

}

document.addEventListener("DOMContentLoaded", function () {

    setupDeleteLinks();

});
