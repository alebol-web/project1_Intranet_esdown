<form method="POST" action="login.php">
    <?php 
    if (isset($_GET['error']) && $_GET['error'] == 'login') {
        echo '<p>Username or password incorrect</p>';
    }
    ?>

    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">  #prévoir une verification bdd, cred similaire pour test

    <button type="submit">Log in</button>
</form>
