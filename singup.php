
<?php include "./include/header.php"?>
<!-- LOGIN FORM SECTION -->
 <style>
  body {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif;
    background: url('asseste/image/image (5).png') center/cover no-repeat;
    display: flex;
    z-index: 1;
    flex-direction: column;
  }

  /* NAVBAR */
  

  /* CENTERED LOGIN FORM */
  main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }

  .login-form {
    width: 100%;
    max-width: 350px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 55px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
  }

  .login-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  .form-group { margin-bottom: 15px; }

  .form-group input {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-sizing: border-box;
  }

  .login-btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg,#ff8,#ffa500);
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    color: #333;
    transition: 0.3s;
  }

  .login-btn:hover { background: linear-gradient(135deg,#ffa500,#ff8); }
  

  
 </style>
<main class="bg">
  <div class="login-form">
    <h2>Welcome Back</h2>
    <form onsubmit="handleLogin(event)">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required/>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required/>
      </div>
      <button type="submit" class="login-btn">Sign In</button>
    </form>
  </div>
</main>
<?php include "./include/footer.php" ?>
<!-- FOOTER -->
<script>
function handleLogin(event){
  event.preventDefault();
  const username = document.getElementById('username').value;
  if(username){ 
    alert(`Welcome, ${username}! Login successful.`);
    document.querySelector('form').reset();
  }
}
</script>

