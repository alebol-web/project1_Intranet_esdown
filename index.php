<form method="POST" action="login.php">
    <?php 
    if (isset($_GET['error']) && $_GET['error'] == 'login') {
        echo '<p>Username or password incorrect</p>';
    }
    ?>

    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">

    <button type="submit">Log in</button>
</form>
