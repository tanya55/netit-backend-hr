<div id="signup--wrapper">
    <form method="POST">
        <input placeholder  = "User name" 
               class        = "input"  
               type         = "text"      
               name         = "user_name">
        <?php displayFormError('signup', 'user_name'); ?>
        
        <input placeholder  ="First name" 
               class        ="input"  
               type         ="text"      
               name         ="first_name">
        <?php displayFormError('signup', 'first_name'); ?>
        
        <input placeholder  = "Last name" 
               class        = "input"  
               type         = "text"      
               name         = "last_name">
        <?php displayFormError('signup', 'last_name'); ?>
        
        <input placeholder  = "Email address" 
               class        = "input"  
               type         = "email"      
               name         = "email">
        <?php displayFormError('signup', 'email'); ?>
        
        <input placeholder  = "Password" 
               class        = "input"  
               type         = "password"  
               name         = "password">
        <?php displayFormError('signup', 'password'); ?>
        
        <input placeholder  = "Repeat password" 
               class        = "input"  
               type         = "password"  
               name         = "password_repeat">
        <input type         = "hidden"  
               name         = "user_request_tokken"
               value        = "1">
        <input class="submit" type="submit">
        
        <input placeholder  = "User number" 
               class        = "input"  
               type         = "number"      
               name         = "number">
        <?php displayFormError('signup', 'number'); ?>
        
        <input placeholder  = "User age" 
               class        = "input"  
               type         = "number"      
               name         = "age">
        <?php displayFormError('signup', 'age'); ?>
        
        <input placeholder  = "User gender" 
               class        = "input"  
               type         = "text"      
               name         = "gender">
        <?php displayFormError('signup', 'gender'); ?>
        
        <input placeholder  = "User city" 
               class        = "input"  
               type         = "text"      
               name         = "city">
        <?php displayFormError('signup', 'city'); ?>
        
        <input placeholder  = "User category" 
               class        = "input"  
               type         = "text"      
               name         = "category">
        <?php displayFormError('signup', 'category'); ?>
    </form>
</div>
