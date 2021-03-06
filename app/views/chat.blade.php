<!DOCTYPE html>
<html>
<head>
    <title>Chat Time</title>

    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>

    <!-- Firebase -->
    <script src='https://cdn.firebase.com/js/client/2.0.2/firebase.js'></script>

    <!-- Firechat -->
    <link rel='stylesheet' href='https://cdn.firebase.com/libs/firechat/2.0.1/firechat.min.css' />
    <script src='https://cdn.firebase.com/libs/firechat/2.0.1/firechat.min.js'></script>

</head>
<body>
    <script type='text/javascript'>
      // Create a new Firebase reference, and a new instance of the Login client
      var chatRef = new Firebase('https://<YOUR-FIREBASE>.firebaseio.com/chat');
      chatRef.onAuth(function(authData) {
        // Once authenticated, instantiate Firechat with our user id and user name
        if (authData) {
          var chat = new FirechatUI(chatRef, document.getElementById('firechat-wrapper'));
          chat.setUser(authData.uid, authData[authData.provider].displayName);
        }
      });
      function login(provider) {
        chatRef.authWithOAuthPopup(provider, function(error, authData) {
          if (error) {
            console.log(error);
          }
        });
      }
    </script>
    <div id='firechat-wrapper'>
      <a href='#' onclick='login("twitter");'>Login</a>
    </div>
  </body>
</html>
