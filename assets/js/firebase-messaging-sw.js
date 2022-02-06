    importScripts('https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js');
    importScripts('https://www.gstatic.com/firebasejs/7.24.0/firebase-messaging.js');

    var firebaseConfig = {
        apiKey: "AIzaSyCnfhvYFm8ftDwukM0SrQZfdLM21xpbltM",
        authDomain: "hemodialisa-c72d5.firebaseapp.com",
        databaseURL: "https://hemodialisa-c72d5.firebaseio.com",
        projectId: "hemodialisa-c72d5",
        storageBucket: "hemodialisa-c72d5.appspot.com",
        messagingSenderId: "336511937317",
        appId: "1:336511937317:web:d85acd09a3485c934a88cc",
        measurementId: "G-MWVX21RMES"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();

    messaging
        .requestPermission()
        .then(function () {
            // MsgElem.innerHTML = "Notification permission granted." 
            console.log("Notification permission granted.");

            // get the token in the form of promise
            return messaging.getToken()
        })
        .then(function(token) {
            // TokenElem.innerHTML = "token is : " + token
            console.log("token is : " + token);
        })
        .catch(function (err) {
            // ErrElem.innerHTML =  ErrElem.innerHTML + "; " + err
            console.log("Unable to get permission to notify.", err);
        });
