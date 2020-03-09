<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Post a Message</title>
</head>
<body>
<?php # Script 16.4 - post_message.php #2
// This is an OOP version of the script from Chapter 13.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Assign the values to variables:
    $forum_id = (int) $_POST['forum_id'];
    $parent_id = (int) $_POST['parent_id'];
    $user_id = 3; // The user_id value would normally come from the session.
    $subject = strip_tags($_POST['subject']);
    $body = strip_tags($_POST['body']);

} // End of submission IF.

// Display the form:
?>
<form action="post_message.php" method="post">

    <fieldset><legend>Post a message:</legend>
    
    <p><strong>Subject</strong>: <input name="subject" type="text" size="30" maxlength="100">
    </p>
    
    <p><strong>Body</strong>: <textarea name="body" rows="3" cols="40"></textarea></p>
    
    </fieldset>
    <div align="center"><input type="submit" name="submit" value="Submit"></div>
    <input type="hidden" name="forum_id" value="1">
    <input type="hidden" name="parent_id" value="0">

</form>
</body>
</html>