<?php
include 'includes/header.php';
?>

<body>
    <div class="container-fluid" id="login">
        <img src="images/flush-logo.png" alt="Flush Logo">
        <h2>Please login to proceed to the main dashboard</h2>
        <form class="col-md6" action="index.php" method="post">

            <div class="mb-3 col-md6">
                <label for="username" class="form-label"><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" required>

                <label for="password" class="form-label"><b>Password</b></label>
                <input type="text" class="form-control" placeholder="Enter Password" name="password" required>

                <button class="btn btn-primary" id="login-btn" type="submit">Login</button>

            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>

</html>