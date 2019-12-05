<?php /* Template Name: Pris - Damer */ ?>
    <?php get_header(); ?>

            <main  style="background-color: white">
                    <v-img src=<?php the_field('billed');?> alt="" id="imgPrice">
                <v-container>
                <v-row>
                    <v-col md="6">
                        <v-card flat class="vcard placePriceCard" style="padding: 10px">
                        <v-card-title class="priceTitle" >
                                <h6>
                                    <?php the_field('titel');?>
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">>
                                        <?php the_field('t1');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t2');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t3');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t4');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t5');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t6');?>
                                    </p>
                                </div>
                                <v-spacer></v-spacer>
                                <div class="DKK">
                                <p class="pwhite">
                                        <?php the_field('p1');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p2');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p3');?>
                                    </p>
                                    <p class="pwhite">
                                     <?php the_field('p4');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p5');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p6');?>
                                    </p>
                                </div>
                            </v-card-text>

                            <v-card-title class="priceTitle">
                                <h6>
                                    <?php the_field('titel2');?>
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">
                                        <?php the_field('t7');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t8');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t9');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t10');?>
                                    </p>
                                </div>
                                <v-spacer></v-spacer>

                                <div class="DKK">
                                    <p class="pwhite">
                                        <?php the_field('p7');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p8');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p9');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p10');?>
                                    </p>
                                </div>
                            </v-card-text>

                            <v-card-title class="priceTitle">
                                <h6>
                                    <?php the_field('titel3');?>
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">
                                        <?php the_field('t11');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t12');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t13');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('t14');?>
                                    </p>
                                </div>
                                <v-spacer></v-spacer>
                                <div class="DKK">
                                    <p class="pwhite">
                                        <?php the_field('p11');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p12');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p13');?>
                                    </p>
                                    <p class="pwhite">
                                        <?php the_field('p14');?>
                                    </p>
                                </div>
                            </v-card-text>
                            <v-card-actions class="centers">
                                <v-btn  class="text-capitalize btnPrice" href="https://salonbook.one/?salon-cheri#/">Book Tid</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
                </v-container>
                    </v-img>


            <v-container>
            <v-row style="margin-top: 80px;">
                <v-col offset-md="1" md="4" class="centers" >
                    <v-card flat >
                        <v-card-title class="vtitle">
                            <h4 style="margin-top: 0">
                                Åbningstider
                            </h4>
                        </v-card-title>
                        <v-card-text class="centers" >
                            <div style="margin: 5px 25px 5px auto">
                                <p>Mandag</p>
                                <p>Tirsdag</p>
                                <p>Onsdag</p>
                                <p>Torsdag</p>
                                <p>Fredag</p>
                                <p>Lørdag</p>
                                <p>Søndag</p>
                            </div>
                            <div style="margin: 5px 20px">
                            <p><?php the_field('tid1') ?> </p>
                                <p><?php the_field('tid2') ?> </p>
                                <p><?php the_field('tid3') ?> </p>
                                <p><?php the_field('tid4') ?> </p>
                                <p><?php the_field('tid5') ?> </p>
                                <p><?php the_field('tid6') ?> </p>
                                <p><?php the_field('tid7') ?> </p>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col offset-md="1" md="5" class="centers">
                    <v-img src=<?php the_field('logo') ?> alt=""></v-img>
                </v-col>
            </v-row>
            </v-container>
            </main>
        <?php get_footer(); ?>

    </div>

 

</body>


</html>