<!-- header from php file -->

<?php

include 'includes/header.php';

?>

   <!-- Responsive Hero Image (will be used on most pages) -->

        <div id="hero">
            <a href="#"></a><img src="images/featured2crop.jpg" alt="woman running in marathon"></div>

        <!-- main section -->

        <main>
            <h3>For more information, please contact us using the form below</h3>
            <h3>Required fields are marked with an asterisk (&#42;).</h3>

        </main>


        <div id="contactform">
            <form id="contact" name="contact" method="post" action="contact_process.php">
                <label for="name" class="label">&#42;Name:</label>
                <input type="text" name="name" id="name" class="textbox" required>
                <label for="email" class="label">&#42;Email:</label>
                <input type="email" name="email" id="email" class="textbox" required>
                <label for="phone" class="label">&#42;Phone:</label>
                <input type="phone" name="phone" id="phone" class="textbox" required>
                <label for="comments" class="label">&#42;Comments:</label>
                <textarea name="comments" id="comments" cols="20" rows="2" class="textbox" required></textarea>
                <label for="inquirytype" class="label">Category:</label>
                <select name="inquirytype" form="contactform">
                  <option value="Volunteer">Volunteer</option>
                  <option value="Athlete">Athlete</option>
                  <option value="Interested Party">Interested Party</option>
                  <option value="Other">Other</option>
                </select>
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
