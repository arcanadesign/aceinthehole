<!-- header from php file -->

<?php

include 'includes/header.php';

?>

    <!-- main section -->

    <main>
        <h3>To register for an upcoming event, please submit the form below.</h3>
        <h3>Required fields are marked with an asterisk (&#42;).</h3>
        </div>

    </main>


    <div id="regform">

        <form name="regform" method="post" action="registration_process.php">

            <label for="regtype" class="label">&#42;Type:</label>
            <select name="regtype" form="regform" required>
                  <option value="Volunteer">Volunteer</option>
                  <option value="Athlete">Athlete</option>
                </select>

            <label for="name" class="label">&#42;Name:</label>
            <input type="text" name="name" id="name" class="textbox" required>

            <label for="email" class="label">&#42;Email:</label>
            <input type="email" name="email" id="email" class="textbox" required>

            <label for="phone" class="label">&#42;Phone:</label>
            <input type="phone" name="phone" id="phone" class="textbox" required>

            <label for="eventtype" class="label">&#42;Event:</label>
            <select name="regtype" form="regform" required>
                  <option value="EventA">Event A</option>
                  <option value="EventB">Event B</option>
                </select>

            <label for="ecname" class="label">&#42;Emergency Contact Name:</label>
            <input type="text" name="ecname" id="ecname" class="textbox" required>

            <label for="ecphone" class="label">&#42;Emergency Phone:</label>
            <input type="phone" name="ecphone" id="ecphone" class="textbox" required>

            <label for="shirtsize" class="label">Shirt Size:</label>
            <select name="shirtsize" form="regform">
                  <option value="Small">Small</option>
                  <option value="Medium">Medium</option>
                  <option value="Large">Large</option>    
                </select>

            <label for="gender" class="label">Gender:</label>
            <select name="gender" form="regform">
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                  <option value="Non-binary">Non-binary</option>    
                </select>

            <label for="comments" class="label">Comments:</label>
            <textarea name="comments" id="comments" cols="20" rows="2" class="textbox"></textarea>


            <input type="Submit" value="Send" class="submit">
        </form>
    </div>
    </div>

    <!-- footer from php file-->

    <?php

include 'includes/footer.php';

?>

        </div>
        </body>

        </html>
