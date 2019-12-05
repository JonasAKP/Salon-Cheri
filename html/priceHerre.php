<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Salon Cheri</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>

<body>
    <div id="app">
        <v-app>
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">
                        <img src="../assest/logo.svg" alt="">
                    </a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                        <li>
                                    <v-btn

                                           depressed
                                           class="text-capitalize"
                                           style="background-color: white"
                                           href="index.html"
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
                                                   href="html/priceHerre.html"
                                            >
                                                Herre
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                   depressed
                                                   class="text-capitalize"
                                                   style="background-color: white"
                                                   href="index.html"
                                            >
                                                Dame
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                   depressed
                                                   class="text-capitalize"
                                                   style="background-color: white"
                                                   href="index.html"
                                            >
                                                Diverse
                                            </v-btn>
                                        </v-list-item>
                                    </v-list>
                                </v-menu>
                            </li>
                        
                        <li><v-btn class="text-capitalize" href="https://salonbook.one/?salon-cheri#/">Book tid</v-btn></li>
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
                                <v-img class="bar" src="../assest/bars-solid.svg" alt=""></v-img>
                            </v-btn>
                        </template>
                        <v-list>
                            <v-list-item>
                                <v-btn
                                        depressed
                                        class="text-capitalize"
                                        style="background-color: white"
                                        href="index.html"
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
                                                    href="html/priceHerre.html"
                                            >
                                                Herre
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                    depressed
                                                    class="text-capitalize"
                                                    style="background-color: white"
                                                    href="index.html">
                                                Dame
                                            </v-btn>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-btn
                                                    depressed
                                                    class="text-capitalize"
                                                    style="background-color: white"
                                                    href="index.html">
                                               Diverse
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

            <main  style="background-color: white">
                    <v-img src="../assest/BackgroundHerre.png" alt="" id="imgPriceHerre">
                <v-container>
                <v-row>
                    <v-col offset-md="6" md="6">
                        <v-card flat class="vcard placePriceCard" style="padding: 10px">
                            <v-card-title class="priceTitle" >
                                <h6>
                                    HERREKLIP
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">
                                        Herreklip med vask
                                    </p>
                                    <p class="pwhite">
                                        Herreklip med maskine i sider og nakke
                                    </p>
                                    <p class="pwhite">
                                        Maskinklip
                                    </p>
                                    <p class="pwhite">
                                        Herreklip uden vask
                                    </p>
                                    <p class="pwhite">
                                        Skægklip med maskine
                                    </p>
                                    <p class="pwhite">
                                        Herre pensionist klip- alle hverdage ml.9:00-13:00
                                    </p>
                                    <p class="pwhite">
                                        Børneklip 5-12 år
                                    </p>
                                    <p class="pwhite">
                                        Børneklip 0-4 år
                                    </p>
                                    <p class="pwhite">
                                        Pandehår
                                    </p>
                                </div>
                                <v-spacer></v-spacer>
                                <div class="DKK">
                                    <p class="pwhite">
                                        265 kr.
                                    </p>
                                    <p class="pwhite">
                                        225 kr.
                                    </p>
                                    <p class="pwhite">
                                        150 kr.
                                    </p>
                                    <p class="pwhite">
                                        225 kr.
                                    </p>
                                    <p class="pwhite">
                                        75 kr.
                                    </p>
                                    <p class="pwhite">
                                        200 kr.
                                    </p>
                                    <p class="pwhite">
                                        195 kr.
                                    </p>
                                    <p class="pwhite">
                                        180 kr.
                                    </p>
                                    <p class="pwhite">
                                        60 kr.
                                    </p>
                                </div>
                            </v-card-text>

                            <v-card-title class="priceTitle">
                                <h6>
                                    FARVE/REFLEKS - MED KLIP
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">
                                        Herreklip med farve
                                    </p>
                                    <p class="pwhite">
                                        Herreklip med lysning
                                    </p>
                                </div>
                                <v-spacer></v-spacer>

                                <div class="DKK">
                                    <p class="pwhite">
                                        Fra 465 kr.
                                    </p>
                                    <p class="pwhite">
                                        Fra 435 kr.
                                    </p>
                                </div>
                            </v-card-text>

                            <v-card-title class="priceTitle">
                                <h6>
                                    FARVE/REFLEKS - UDEN KLIP
                                </h6>
                            </v-card-title>
                            <v-card-text class="flex">
                                <div >
                                    <p class="pwhite">
                                        Balyage
                                    </p>
                                    <p class="pwhite">
                                        Olaplex - standalone
                                    </p>
                                    <p class="pwhite">
                                        Reflekser bund reparation
                                    </p>
                                </div>
                                <v-spacer></v-spacer>
                                <div class="DKK">
                                    <p class="pwhite">
                                        Fra 1300 kr.
                                    </p>
                                    <p class="pwhite">
                                        Fra 450 kr.
                                    </p>
                                    <p class="pwhite">
                                        Fra 470 kr.
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
                                <p>9.00-17.00 </p>
                                <p>9.00-17.30</p>
                                <p>Lukket</p>
                                <p>9.30-17.30</p>
                                <p>9.00-17.30</p>
                                <p>Efter aftale</p>
                                <p>Lukket</p>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col offset-md="1" md="5" class="centers">
                    <v-img src="../assest/logo.svg" alt=""></v-img>
                </v-col>
            </v-row>
            </v-container>
            </main>

            <footer>
            <v-row class="vrow">
                <v-col offset-md="2" md="2" xs="12">
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

                <v-col offset-md="1" md="2" xs="12">
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

                <v-col offset-md="1" md="2" xs="12">
                    <v-card flat class="vcard">
                        <v-card-title class="vtitle centers">
                            <h5 >
                                Følg med
                            </h5 >
                        </v-card-title>
                        <v-card-text class="centers" >
                            <div >
                                <a target="_blank" href="https://www.facebook.com/saloncheriesbjerg/">   <v-img src="../assest/facebook.svg" alt="" class="icon"></v-img></a>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
            </footer>
        </v-app>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script>
        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
        })
    </script>


</body>


</html>