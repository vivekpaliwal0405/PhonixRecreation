<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    
    <link rel="stylesheet" type="text/css" href="adminloginstyles.css" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </head>
  <body>
    
    <div class="container">
      <h2>Admin Login</h2>
      <form id="loginForm" action="adminlogin.php" method="post">
        <div class="upper-div">
            <box-icon class="admin-icon" name='user'></box-icon>
            <input type="text" id="username" name="username" required placeholder="Admin Name" class="input" />
        </div>
        <div class="upper-div">
          <box-icon class="lock-icon" name='lock-alt'></box-icon>
          <input type="password" id="password" name="password" required placeholder="Password" class="input"/>
        </div>
        <button type="submit" onclick="nextpage()">Log In</button>
      </form>
      <script src="loginscript.js"></script>
    </div>
  </body>
  </html>

