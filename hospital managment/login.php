<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | Task Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #1d3557, #457b9d, #a8dadc);
      background-size: 400% 400%;
      animation: gradientMove 15s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-form {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
      width: 100%;
      max-width: 400px;
    }

    .login-form h3 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
      color: #1d3557;
    }

    .btn-primary {
      background-color: #1d3557;
      border: none;
    }

    .btn-primary:hover {
      background-color: #16324e;
    }
  </style>
</head>
<body>

  <form method="POST" action="app/login.php" class="login-form">
    <h3 class="display-6">LOGIN</h3>

    <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger">
        <?php echo stripcslashes($_GET['error']); ?>
      </div>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
      <div class="alert alert-success">
        <?php echo stripcslashes($_GET['success']); ?>
      </div>
    <?php } ?>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="user_name" required />
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required />
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
