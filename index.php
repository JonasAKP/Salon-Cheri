<?php get_header(); ?>
            <main class="background-con">
                <v-parallax height="800" src="<?php the_field('paralax');?>"></v-parallax>
                <v-container>
                <v-row style="margin: 90px auto">
                    <v-col offset-md="1" md="4">
                        <v-img src="<?php the_field('profil');?>" alt=""></v-img>
                    </v-col>
                    <v-col offset-md="1" md="5">
                        <v-card flat >
                            <v-card-title class="vtitle">
                                <h4 style="margin-top: 0">
                                <?php the_field('profil-t');?>
                                </h4>
                            </v-card-title>
                            <v-card-text>
                        <span >
                        <?php the_field('profil-b');?>
                        </span>
                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
                </v-container>

                <v-row class="vrow">
                    <v-col md="6" style="padding:0">
                        <v-img src=<?php the_field('vb') ?> alt=""></v-img>
                    </v-col>
                    <v-col offset-md="1" md="4"  class="centers">
                            <v-card flat class="vcard">
                            <v-card-title class="vtitle">
                                <h4 class="h4white" style="margin-top: 0">
                                    <?php the_field('ft-h') ?>
                                </h4>
                            </v-card-title>
                            <v-card-text>
                        <span style="color: white" >
                        <?php the_field('ft-b') ?>
                        </span>
                            </v-card-text>
                            </v-card>
                    </v-col>
                </v-row>
                <v-row class="vrow">
                    <v-col offset-md="1" md="4"  class="centers">
                        <v-card flat class="vcard">
                            <v-card-title class="vtitle">
                                <h4 class="h4white" style="margin-top: 0">
                                    <?php the_field('at-h') ?>

                                </h4>
                            </v-card-title>
                            <v-card-text>
                            <span style="color: white" >
                                <?php the_field('at-b') ?>
                            </span>
                            </v-card-text>
                        </v-card>
                    </v-col>
                    <v-col offset-md="1" md="6" style="padding:0">
                        <v-img src=<?php the_field('hb') ?> alt=""></v-img>
                    </v-col>
                </v-row>

                <v-row style="margin-top: 80px">
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
                        <!-- <v-img src="<?php echo get_template_directory_uri() ?>/assest/logo.svg" alt=""></v-img> -->
                        <?php the_field('youtube') ?>
                    </v-col>
                </v-row>


                <?php get_footer(); ?>
 