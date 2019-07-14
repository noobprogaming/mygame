function onSignIn(googleUser) {
    /*
    // Useful data for your client-side scripts:

    var profile = googleUser.getBasicProfile();
    
    var id_google = ('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    var fullname = ('Full Name: ' + profile.getName());
    var fname = ('Given Name: ' + profile.getGivenName());
    var lname = ('Family Name: ' + profile.getFamilyName());
    var pp = ("Image URL: " + profile.getImageUrl());
    var email = ("Email: " + profile.getEmail());

    // The ID token you need to pass to your backend:
    var id_token = googleUser.getAuthResponse().id_token;
    var token = ("ID Token: " + id_token);
    */

    var profile = googleUser.getBasicProfile();
    if (profile) {
        $.ajax({
            type: 'POST',
            url: '../gsign.php',
            data: {
                id: profile.getId(),
                name: profile.getName(),
                email: profile.getEmail(),
                pp: profile.getImageUrl()
            }
        }).done(function (data) {
            console.log(data);
            window.location.href = 'profile/index.php';
        }).fail(function () {
            alert("Login gagal!");
        });
    }
}


function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        window.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://punyakita.tech";
    });
    gapi.auth.signOut();
}

function alert() {
    setTimeout(function () {
        $('#myalert').css({"opacity": "0"});
    }, 5000);
    setTimeout(function () {
        $('#myalert').hide();
    }, 10000);
}
