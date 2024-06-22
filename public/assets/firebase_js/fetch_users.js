 // Firebase configuration
  var firebaseConfig = {
    // Your Firebase configuration here
            apiKey: "{{ config('services.firebase.apiKey') }}",
            authDomain: "{{ config('services.firebase.authDomain') }}",
            projectId: "{{ config('services.firebase.projectId') }}",
            // databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storageBucket') }}",
            messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
            appId: "{{ config('services.firebase.appId') }}",
            measurementId: "{{ config('services.firebase.measurementId') }}"
  };

  firebase.initializeApp(firebaseConfig);
 // firebase.Analytics();
 var db = firebase.firestore();
 db.collection("users").get().then(function(querySnapshot) {
    var htmls = [];
    querySnapshot.forEach(function(doc) {
        var value = doc.data();
        var rowData = {
            uid: value.uid,
            name: value.name,
            email: value.email,
            phoneNumber: value.phoneNumber
        };
        htmls.push(rowData);
    });
    
    // Send the HTMLs array to the controller using AJAX
    sendDataToController(htmls);
}).catch(function(error) {
    console.error(error);
});

function sendDataToController(data) {
    $.ajax({
        url: 'users',
        method: 'POST',
        data: { data: JSON.stringify(data) },
        success: function(response) {
            console.log(response); // Handle the response from the controller if needed
        },
        error: function(xhr, status, error) {
            console.log(error); // Handle the error if the AJAX request fails
        }
    });
}

