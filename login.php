<?php require_once 'header.php'; ?>
<form method="post" action="transact-user.php">
<h1>Member Login</h1>
<p>
Email Address:<br>
<input type="text" name="email" maxlength="255" value="">
</p>
<p>
Password:<br>
<input type="password" name="passwd" maxlength="50">
</p>
<p>
<input type="submit" class="submit" name="action" value="Login">
</p>
<p>
Not a member yet? <a href="useraccount.php">Create a new account!</a>
</p>
<p>
<a href="forgotpass.php">Forgot your password?</a>
</p>
</form>
<<<<<<< HEAD
<div style="background-color: #dcdcdc;">You can either register as a user or use the following credentials to log in to this CMS.<br><br>
    <strong>For User </strong><br>
Email : user1@gmail.com<br>
Pass  : 123456<br><br>

<strong>For Moderator </strong><br>
Email : moderator@gmail.com<br>
Pass  : 123456


</div>
=======
>>>>>>> 18a31d2c59cb86f36387c975825f6aa1225d8ad6
<?php require_once 'footer.php'; ?>