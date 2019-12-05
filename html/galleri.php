<body>
    <div id="app">
        <v-app>
            <div style="background-color: white">
            <v-container >
            <v-row>
                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                    <v-card flat class="placeTag" v-on="on" >
                        <v-img src="../assest/lady.png" alt="" ></v-img>
                        <v-btn class="nameTag">
                            Damer
                        </v-btn>
                    </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs(-1)">&#10094;</button>
                                <img class="mySlides" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>

                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                            <v-card flat class="placeTag" v-on="on" >
                                <v-img src="../assest/kids.png" alt="" ></v-img>
                                <v-btn class="nameTag">
                                    Børn
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs1(-1)">&#10094;</button>
                                <img class="mySlides1" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides1 mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides1 mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs1(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>

                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                            <v-card flat class="placeTag" v-on="on" >
                                <v-img src="../assest/herre.png" alt="" ></v-img>
                                <v-btn class="nameTag">
                                    Herre
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs2(-1)">&#10094;</button>
                                <img class="mySlides2" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides2  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides2  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs2(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>
            </v-row>

            <v-row>

                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                            <v-card flat class="placeTag" v-on="on" >
                                <v-img src="../assest/diverse.png" alt="" ></v-img>
                                <v-btn class="nameTag">
                                    Diverse
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs3(-1)">&#10094;</button>
                                <img class="mySlides3" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides3  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides3  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs3(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>

                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                            <v-card flat class="placeTag" v-on="on" >
                                <v-img src="../assest/diverse2.png" alt="" ></v-img>
                                <v-btn class="nameTag">
                                    Diverse 2
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs4(-1)">&#10094;</button>
                                <img class="mySlides4" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides4  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides4  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs4(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>

                <v-col md="4" >
                    <v-dialog
                            v-model="dialog"
                            width="40%"
                    >
                        <template v-slot:activator="{ on }">
                            <v-card flat class="placeTag" v-on="on" >
                                <v-img src="../assest/style.png" alt="" ></v-img>
                                <v-btn class="nameTag">
                                    Styling
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs5(-1)">&#10094;</button>
                                <img class="mySlides5" src="<?php echo get_template_directory_uri() ?>../assest/bluehair.png" style="width:100%">
                                <img class="mySlides5  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pinkhair.png" style="width:100%">
                                <img class="mySlides5  mySlidesDisplay" src="<?php echo get_template_directory_uri() ?>../assest/pixel.png" style="width:100%">
                                <button class="arrows" onclick="plusDivs5(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>
            </v-row>
            </v-container>
            <?php get_footer(); ?>
            </div>
           
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

</body>


</html>