<?php

    require_once 'support.php';
    $email = $_POST['email'];
echo "
    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"createAccount.css\">";

    $body = <<<BODY
    <div class="page flexcontainer">
    <div class="container-fluid bg-2 text-center">
        <h3>Choose what you and your friends would most like to improve on</h3>
</div>
<div class="container-fluid bg-3 text-center">
        <form action="set.php" method="post">
            <div class="form-check">
                <label class="form-check-label" for="sleep">
                <input type="checkbox" name="sleep" checked class="form-check-input"/>&nbsp&nbsp&nbsp&nbsp&nbsp
                Sleep
                </label>
            </div><br>
            <input type="hidden" name="email" value="$email">
            <button type="submit" name="setGoals">Submit</button>
        </form>    
</div>
<div class="container-fluid bg-4 text-center"></div>
</div>
BODY;
    generatePage($body, 'Create Account');

?>