<?php /* Template Name: Galleri*/ ?>
    <?php get_header(); ?>

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
                        <v-img src=<?php the_field('f1') ?> alt="" max-height=430></v-img>
                        <v-btn class="nameTag">
                            Damer
                        </v-btn>
                    </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs(-1)">&#10094;</button>
                                <img class="mySlides" src=<?php the_field('b1') ?> style="width:100%">
                                <img class="mySlides mySlidesDisplay" src=<?php the_field('b2') ?> style="width:100%">
                                <img class="mySlides mySlidesDisplay" src=<?php the_field('b3') ?> style="width:100%">
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
                            <v-img src=<?php the_field('f2') ?> alt="" max-height=430px></v-img>
                                <v-btn class="nameTag">
                                    Børn & Unge
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs1(-1)">&#10094;</button>
                                <img class="mySlides1" src=<?php the_field('b4') ?> style="width:100%">
                                <img class="mySlides1 mySlidesDisplay" src=<?php the_field('b5') ?> style="width:100%">
                                <img class="mySlides1 mySlidesDisplay" src=<?php the_field('b6') ?> style="width:100%">
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
                                <v-img src=<?php the_field('f3') ?> alt="" max-height=430px></v-img>
                                <v-btn class="nameTag">
                                    Herre
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs2(-1)">&#10094;</button>
                                <img class="mySlides2" src=<?php the_field('b7') ?> style="width:100%">
                                <img class="mySlides2  mySlidesDisplay" src=<?php the_field('b8') ?> style="width:100%">
                                <img class="mySlides2  mySlidesDisplay" src=<?php the_field('b9') ?> style="width:100%">
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
                                <v-img src=<?php the_field('f4') ?> alt="" max-height=430px></v-img>
                                <v-btn class="nameTag">
                                    Produkter
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs3(-1)">&#10094;</button>
                                <img class="mySlides3" src=<?php the_field('b10') ?> style="width:100%">
                                <img class="mySlides3  mySlidesDisplay" src=<?php the_field('b11') ?> style="width:100%">
                                <img class="mySlides3  mySlidesDisplay" src=<?php the_field('b12') ?> style="width:100%">
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
                                <v-img src=<?php the_field('f5') ?> alt="" max-height=430px></v-img>
                                <v-btn class="nameTag">
                                    Salon
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs4(-1)">&#10094;</button>
                                <img class="mySlides4" src=<?php the_field('b13') ?> style="width:100%">
                                <img class="mySlides4  mySlidesDisplay" src=<?php the_field('b14') ?> style="width:100%">
                                <img class="mySlides4  mySlidesDisplay" src=<?php the_field('b15') ?> style="width:100%">
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
                                <v-img src=<?php the_field('f6') ?> alt="" max-height=430px></v-img>
                                <v-btn class="nameTag">
                                    Styling
                                </v-btn>
                            </v-card>
                        </template>
                        <v-card>
                            <div class="slideContainer">
                                <button class="arrows" onclick="plusDivs5(-1)">&#10094;</button>
                                <img class="mySlides5" src=<?php the_field('b16') ?> style="width:100%">
                                <img class="mySlides5  mySlidesDisplay" src=<?php the_field('b17') ?> style="width:100%">
                                <img class="mySlides5  mySlidesDisplay" src=<?php the_field('b18') ?> style="width:100%">
                                <button class="arrows" onclick="plusDivs5(1)">&#10095;</button>
                            </div>
                        </v-card>
                    </v-dialog>
                </v-col>
            </v-row>
            </v-container>
        <?php get_footer(); ?>
    </div> 
    

    

</body>



</html>