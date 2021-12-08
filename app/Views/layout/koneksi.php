<?php
    $firebaseConfig = "const firebaseConfig = {
        apiKey: 'AIzaSyDI4jlwm4BRRSlQ2WZu5R04wDCCdBhyt04',
        authDomain: 'instify-ac4eb.firebaseapp.com',
        projectId: 'instify-ac4eb',
        storageBucket: 'instify-ac4eb.appspot.com',
        messagingSenderId: '674491475877',
        appId: '1:674491475877:web:17e1f5faf7d383ad912a4c',
        measurementId: 'G-4KF6KY2X0Y'
      };"
?>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  <?=$firebaseConfig?>

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

</script>