<?php
  include_once 'header.php';
?>


        <section class="signup-form">
            <h2>Log In</h2>

            <div class="form-style">

                <form action="signup.inc.php" method="post">

                    <input type="text" name="name" placeholer="Username/Email ...">
                    <input type="password" name="pwd" placeholer="Password ...">

                    <button type="submit" name="submit">Sign Up</button>

                </form>
            </div>
            
        </section>


<?php
  include_once 'footer.php';
?>