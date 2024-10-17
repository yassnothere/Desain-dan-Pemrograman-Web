<!DOCTYPE html>
<html>

<head>
  <title>Form Input dengan Validasi jQuery</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <div id="hasil"></div>

    <input type="submit" value="Submit">
  </form>

  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        if (nama === "") {
          $("#nama-error").text("Nama harus diisi.");
          valid = false;
        } else {
          $("#nama-error").text("");
        }

        if (email === "") {
          $("#email-error").text("Email harus diisi.");
          valid = false;
        } else {
          $("#email-error").text("");
        }
        
        if (password!="" && password.length < 8) {
          $("#password-error").text("password minimal harus 8 karakter.");
          valid = false;
        } else if(password==""){
          $("#password-error").text("password harus diisi.");
          valid = false;
        } else {
          $("#password-error").text("");
        }

        if(!valid){
          event.preventDefault();      
        }

        // Mengirimkan form jika validasi sukses
        event.preventDefault(); 
        var formData = $(this).serialize();

        $.ajax({
          url: "proses_validasi.php",
          type: "POST",
          data: formData,
          success: function(response) {
            $("#hasil").html(response);
          }
        });
      });
    });
  </script>

</body>

</html>