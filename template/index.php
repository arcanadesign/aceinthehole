<!-- header from php file -->

<?php

include 'includes/header.php';

?>

        <!-- Headline -->
        <div id="headline">

            <h1>Events for Every Body!</h1>

        </div>

        <!-- Responsive Image Gallery -->

        <script src="scripts/jquery.js"></script>
        <script src="scripts/jquery.cycle2.min.js"></script>
        <script src="scripts/scripts3-done.js"></script>

        <div class="cycle-slideshow" data-cycle-slides="> div.slide" data-cycle-pause-on-hover="true" data-cycle-swipe="true" data-cycle-overlay-template="<div class='caption'><h2>{{title}}</h2><p>{{desc}}</p></div>">
            <div class="cycle-prev"></div>
            <div class="cycle-next"></div>
            <div class="cycle-overlay"></div>
            <div class="slide" data-cycle-title="" data-cycle-desc=""><img src="images/slide1.jpg" alt="large crowd of people running">
            </div>
            <div class="slide" data-cycle-title="" data-cycle-desc=""><img src="images/slide2.jpg" alt="large group of people running marathon">
            </div>
            <div class="slide" data-cycle-title="" data-cycle-desc=""><img src="images/slide3.jpg" alt="women competing in a race">
            </div>
            <div class="slide" data-cycle-title="" data-cycle-desc=""><img src="images/slide4.jpg" alt="person jogging in race">
            </div>
        </div>

        <!-- main section -->

        <main>

            <section id="main">


                <h2>HEADLINE</h2>

                <p>Lorem ipsum dolor sit amet, sit nonumy melius at. In possit legendos interpretaris ius. Ex purto ludus veritus eam, ut autem mediocritatem vis. Dicta laoreet minimum an nec, an eos dicit alienum reprimique. In sapientem pertinacia pri, his cetero vidisse suscipiantur no.</p>

                <p>Ex deleniti gloriatur mel, at vidit iriure eos. Ea sumo mazim percipitur pri. Mel ne ferri laudem placerat, no aeterno delicatissimi mei. Nobis sanctus nominavi ut eum, amet inermis expetenda cu ius, an legere discere eos.</p>

                <p>Et sed imperdiet intellegat, esse facer mandamus ei nam. Id quas mundi perfecto mea, pri ut brute everti recteque. An vel choro albucius, in quo semper putant explicari. No ius explicari scribentur, usu etiam vidisse recteque ex. Ea sea utinam verterem, eu mea fugit luptatum.</p>


            </section>


            <!-- Featured Images (added on per page basis) -->

            <section id="featuredimg" class="section group">
                <div class="col span_1_of_3">
                    <img src="images/featured1.jpg" alt="people jogging in color run race">
                </div>

                <div class="col span_1_of_3">
                    <img src="images/featured2.jpg" alt="woman running in marathon">
                </div>

                <div class="col span_1_of_3">
                    <img src="images/featured3.jpg" alt="person entering race finish line">
                </div>
            </section>


        </main>

<!-- footer from php file-->

<?php

include 'includes/footer.php';

?>

        </div>
    </body>

</html>

