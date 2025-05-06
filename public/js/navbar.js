$(document).ready(function () {
    $.get('/api/auth-check', function (data) {
        if (data.auth) {
            $('#nav-login').addClass('d-none');
            $('#nav-user').removeClass('d-none');
            $('#nav-username').text(data.user.nome);
        } else {
            $('#nav-login').removeClass('d-none');
            $('#nav-user').addClass('d-none');
        }
    });
});