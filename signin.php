
<div id="signup--wrapper">
    <form method="POST">
        <input placeholder  = "User E-mail"
               class        = "input"
               type         = "text"      
               name         = "user_email">
        <?php displayFormError('signin', 'user_email'); ?>

        <input placeholder  = "User password" 
               class        = "input"
               type         = "password"  
               name         = "user_pass">
        <input type         = "hidden"    
               name         = "user_request_tokken"
               value        = "1">
        <input class        = "submit" 
               type         = "submit">
    </form>
</div>
