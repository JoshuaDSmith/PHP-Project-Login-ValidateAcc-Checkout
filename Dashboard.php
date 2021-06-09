<?php


echo "Hello";
?>



<html>
    <head>
        <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.69.1/maps/maps.css'>
        <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.69.1/maps/maps-web.min.js"></script>
    
        <style>
        .mymap {
            width: 900px;
            height: 900px;
        }
        
        </style>
        </head>
    <body>
    <div style="width:90vw; height: 90vh" id="mymap"> 
        <h1>Setting up TomTom Map API</h1>
    </div>
        <script>

            var APIKEY = "s23iyHGVjDNCGdoPZ3ZPdf2rlJ2nzFBb";
            var map = tt.map({
            key: APIKEY,
            container: 'mymap',
            style: 'tomtom://vector/1/basic-main' 
        });
        </script>
            <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
                https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-analytics.js"></script>

            <script>
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            var firebaseConfig = {
                apiKey: "AIzaSyDk36Y0OXVoZHjvxKUbvs-FPOXy1ac6iZY",
                authDomain: "test01firebasedb.firebaseapp.com",
                projectId: "test01firebasedb",
                storageBucket: "test01firebasedb.appspot.com",
                messagingSenderId: "155115060881",
                appId: "1:155115060881:web:3fce9478ee995ae6ebc930",
                measurementId: "G-DPZ1XL8K1D"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();

//             service firebase.storage {
//   match /b/{bucket}/o {
//     match /{allPaths=**} {
//       allow read, write: if request.auth != null;
//     }
//   }
//}

// rules_version = '2';
// service cloud.firestore {
//   match /databases/{database}/documents {
//     match /{document=**} {
//       allow read, write: if
//           request.time < timestamp.date(2021, 5, 5);
//     }
//   }
// }
            </script>
    </body>
</html>