</main>
            <footer>
                <v-row class="vrow">
                    <v-col offset-md="2" md="2">
                        <v-card flat class="vcard">
                            <v-card-title class="vtitle centers">
                                <h5>
                                    Salon Cheri
                                </h5 >
                            </v-card-title>
                            <v-card-text  >
                                <p class="footertext">
                                    Gl. Novrupvej 5
                                    6705 Esbjerg
                                </p>
                            </v-card-text>
                        </v-card>
                    </v-col>

                    <v-col offset-md="1" md="2">
                        <v-card flat class="vcard">
                            <v-card-title class="vtitle centers">
                                <h5 >
                                    Kontakt
                                </h5 >
                            </v-card-title>
                            <v-card-text  >
                                <p class="footertext">
                                    +45 22 32 48 49  info@saloncheri.dk
                                </p>
                            </v-card-text>
                        </v-card>
                    </v-col>

                    <v-col offset-md="1" md="2">
                        <v-card flat class="vcard">
                            <v-card-title class="vtitle centers">
                                <h5 >
                                    Følg med
                                </h5 >
                            </v-card-title>
                            <v-card-text class="centers" >
                                <div >
                                    <a target="_blank" href="https://www.facebook.com/saloncheriesbjerg/">   <v-img src="<?php echo get_template_directory_uri() ?>/assest/facebook.svg" alt="" class="icon"></v-img></a>
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
            </footer>
        </v-app>
    </div>

    <!-- Slide show -->
<script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>

    <script>
        var slideIndex = 1;
        showDivs1(slideIndex);

        function plusDivs1(n) {
            showDivs1(slideIndex += n);
        }

        function showDivs1(n) {
            var i;
            var x = document.getElementsByClassName("mySlides1");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>

    <script>
        var slideIndex = 1;
        showDivs2(slideIndex);

        function plusDivs2(n) {
            showDivs2(slideIndex += n);
        }

        function showDivs2(n) {
            var i;
            var x = document.getElementsByClassName("mySlides2");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
    <script>
        var slideIndex = 1;
        showDivs3(slideIndex);

        function plusDivs3(n) {
            showDivs3(slideIndex += n);
        }

        function showDivs3(n) {
            var i;
            var x = document.getElementsByClassName("mySlides3");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
    <script>
        var slideIndex = 1;
        showDivs4(slideIndex);

        function plusDivs4(n) {
            showDivs4(slideIndex += n);
        }

        function showDivs4(n) {
            var i;
            var x = document.getElementsByClassName("mySlides4");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
    <script>
        var slideIndex = 1;
        showDivs5(slideIndex);

        function plusDivs5(n) {
            showDivs5(slideIndex += n);
        }

        function showDivs5(n) {
            var i;
            var x = document.getElementsByClassName("mySlides5");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script>
        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
        })
    </script>



</body>
<?php 
            wp_footer(); 
    ?>

</html>