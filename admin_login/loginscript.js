

let username = "admin";
let password = "password";

 function  nextpage() {
    if (username === "admin" && password === "password") {
      window.location.href = "dashborad.php";
      
      alert("Login successful!");
    }
      else {
              alert("Invalid username or password.");
           }
    }
  




 