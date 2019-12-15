// Loading when we enter Simpotren
// document.querySelector('.wrapper').style.display = 'none';
var loading;

loading = setTimeout(() => {
    document.querySelector('.loader').style.display = "none";
    showPage();
}, 2000);


function showPage() {
    document.querySelector('.wrapper').style.display = "flex";
}

$(document).ready(function () {
    // $("#sidebar").mCustomScrollbar({
    //     theme: "minimalis"
    // });

    $('#sidebarCollapse').on('click', function () {

        $('#sidebar, #content').toggleClass('active');

        $('.collapse.in').toggleClass('in');

        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});