<?php
  include_once 'header.php';
?>


        <section class="signup-form">
            <h2>Sign Up</h2>

            <div class="form-style">

                <form action="signup.inc.php" method="post">

                    <input type="text" name="name" placeholer="Full name ...">
                    <input type="text" name="email" placeholer="Email ...">
                    <input type="text" name="uid" placeholer="Username ...">
                    <input type="password" name="pwd" placeholer="Password ...">
                    <input type="password" name="pwd-repeat" placeholer="Repeat Password ...">

                    <button type="submit" name="submit">Sign Up</button>

                </form>
            </div>
            
        </section>


<?php
  include_once 'footer.php';
?>