<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Salon Cheri</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <?php 
            wp_head(); 
    ?>
</head>

<body>

    <div id="app">
        <v-app>
            <nav>
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assest/logo.svg"/>
                    </a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                        <li>
                                    <v-btn

                                           depressed
                                           class="text-capitalize"
                                           style="background-color: white"
                                           href="galleri"
                                    >
                                        galleri
                                    </v-btn>
                        </li>
                        <li>
                                <v-menu offset-y>
                                    <template v-slot:activator="{ on }">
                                        <v-btn text v-on="on"
                                               depressed
                                               class="text-capitalize"
                                               style="background-color: white">
                                            Priser
                                        </v-btn>
                                    </template>
                                    <v-list>
                                        <v-list-item>
                                            <v-btn
                                                   depressed
                                                   class="text-capitalize"
                                                   style="background-color: white"
                                                   href="priceherre"
                                            >
                                                Herre
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                   depressed
                                                   class="text-capitalize"
                                                   style="background-color: white"
                                                   href="pricedame"
                                            >
                                                Dame
                                            </v-btn>
                                        </v-list-item>
                                    </v-list>
                                </v-menu>
                            </li>
                        
                        <li><v-btn class="text-capitalize" href="https://salonbook.one/?salon-cheri#/">Bestil tid</v-btn></li>
                    </ul>

                    <div  class="right hide-on-med-and-up">
                    <v-menu offset-y >
                        <template v-slot:activator="{ on }">
                            <v-btn
                                    v-on="on"
                                    depressed
                                    class="text-capitalize"
                                    style="background-color: white"
                            >
                                <v-img class="bar" src="/assest/bars-solid.svg" alt=""></v-img>
                            </v-btn>
                        </template>
                        <v-list>
                            <v-list-item>
                                <v-btn
                                        depressed
                                        class="text-capitalize"
                                        style="background-color: white"
                                        href="galleri"
                                >
                                    Galleri
                                </v-btn>
                            </v-list-item>
                            <v-list-item>
                                <v-menu  open-on-hover top>
                                    <template v-slot:activator="{ on }">
                                        <v-btn  v-on="on"
                                               depressed
                                               class="text-capitalize"
                                               style="background-color: white">
                                            Priser
                                        </v-btn>
                                    </template>
                                    <v-list>
                                        <v-list-item >
                                            <v-btn
                                                    depressed
                                                    class="text-capitalize"
                                                    style="background-color: white"
                                                    href="priceherre"
                                            >
                                                Herre
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                    depressed
                                                    class="text-capitalize"
                                                    style="background-color: white"
                                                    href="pricedame">
                                                Dame
                                            </v-btn>
                                        </v-list-item>
                                    </v-list>
                                </v-menu>
                            </v-list-item>
                            <v-list-item>
                                <v-btn
                                        depressed
                                        class="text-capitalize"
                                        style="background-color: white"
                                        href="https://salonbook.one/?salon-cheri#/"
                                >
                                    Book tid
                                </v-btn>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                    </div>

                </div>
            </nav>