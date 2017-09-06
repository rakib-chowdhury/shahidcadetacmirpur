<?php $this->load->view('home/header_links'); ?>
<?php $this->load->view('home/header'); ?>
<!-- / page header -->
<!-- revolution slider -->
<div class="tp-banner-container">
    <div class="tp-banner-slider">
        <ul>
            <?php foreach ($slider_info as $key => $u) { ?>
                <li data-masterspeed="700">
                    <img src="<?= base_url() ?>assets/images/slider/<?= $u->image ?>"
                         data-lazyload="<?= base_url() ?>assets/images/slider/<?= $u->image ?>"
                         style="" alt>
                    <div class="tp-caption sl-content align-left" data-x="['left','center','center','center']"
                         data-hoffset="20" data-y="center" data-voffset="0"
                         data-width="['200px','300px','500px','300px']"
                         data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                         data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                        <div class="sl-title"
                             style="height: 100px !important; width: 710px !important; background-color: transparent; color: #0a0a0a; font-size: 20px; margin-bottom: 450px">
                            <b><?= $u->description ?></b></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- / revolution slider -->
<hr class="divider-color">
<!-- content -->
<div id="home" class="page-content padding-none">

    <section class="mid-top-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 admission-banner-z-up">
                    <div class="admission-banner-block">
                        <a href="admission.html"><img src="<?= base_url() ?>assets/images/banner.jpg"
                                                      class="img-responsive" alt=""></a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-description">
                                <h2 class="text-center text-uppercase">SHAHID CADET ACADEMY</h2>
                                <p>
                                    <?= $bio_info[0]->bio ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-3 chairman-z-up">
                    <div class="chairman-msg-block">
                        <?php if($chairman != null) { ?>
                        <div class="chairman-msg-img">
                            <img class="img-responsive"
                                 src="<?= base_url() ?>assets/images/person/<?= $person[0]->image ?>"/>
                        </div>
                        <div class="chairman-msg-description">
                            <h3 class="uk-module-title" style="background-color: white !important; color: black">
                                Chairman's welcome</h3>
                            <p class="tm-quote" style="margin-bottom: -0.15em">
                                <?= word_limiter($chairman[0]->message, 130, ''); ?>...
                            </p>
                            <button style="float: right" class="btn btn-info btn-raised"
                                    onclick="window.location='<?php echo site_url("home/message_chairman"); ?>'">Read
                                More...
                            </button>
                            <br>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="divider-color"/>
    <!-- section -->
    <?php if((sizeof($chairman) != null) || (sizeof($md)) != null) { ?>
    <section class="padding-section">
        <div class="grid-row clear-fix">
            <div class="grid-col-row">
                <div class="grid-col-person grid-col-4">
                    <div class="course-item">
                        <?php if($chairman != null) { ?>
                        <div class="course-hover">
                            <img src="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>"
                                 data-at2x="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>"
                                 style="height: 360px !important; width: 370px !important;" alt>

                        </div>
                        <div class="course-name clear-fix" style="text-align:center">
                            <h3 style="font-weight: bolder;"><a
                                    href="<?= base_url() ?>home/message_chairman"><?= $chairman[0]->name ?></a></h3>
                        </div>
                        <div class="course-date bg-color-1 clear-fix">
                            <div class="description" style="font-weight: bolder;"><?= $chairman[0]->designation ?></div>
                        </div>
                        <?php } ?> 
                    </div>
                </div>
                <div class="grid-col-person grid-col-4">
                    <!-- course item -->
                    <div class="course-item">
                        <?php if($md != null) { ?>
                        <div class="course-hover">
                            <img src="<?= base_url() ?>assets/images/person/<?= $md[0]->image ?>" data-at2x="img/md.png"
                                 style="height: 360px !important; width: 370px !important;" alt="">
                        </div>
                        <div class="course-name clear-fix" style="text-align: center;">
                            <h3 style="font-weight:bolder"><a
                                    href="<?= base_url() ?>home/message_md"><?= $md[0]->name ?></a></h3>
                        </div>
                        <div class="course-date bg-color-2 clear-fix">
                            <div class="description" style="font-weight:bolder;"><?= $md[0]->designation ?></div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- / course item -->
                </div>
            </div>

        </div>
    </section>
    <?php } ?>

    <!-- / section -->

    <hr class="divider-color"/>

    <!-- paralax section -->
    <section class="padding-section">
        <div class="grid-row clear-fix">
            <div class="grid-col-row">
                <h2 class="text-uppercase text-center">Photo Gallery</h2>
                <div class=" row form-group col-md-12">
                    <div class="tabs-box">
                        <a href="#vd" data-boxs-tab="1" class="active">All</a>
                        <a href="#dvd" data-boxs-tab="2">Academic</a>
                        <a href="#cddv" data-boxs-tab="3">Games</a>
                        <a href="#cddv" data-boxs-tab="4">Official</a>
                    </div>
                </div>
                <div class=" row grid-col grid-col-12">
                    <div class="boxs-tab">
                        <div class="animated fadeIn active" data-box="1">
                            <div class="col-sm-12 gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <div class="col-sm-3 img-hover-scale">
                                        <img src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                             data-at2x="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                             style="height: 180px !important; width: 400px !important;" alt>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="2">
                            <div class="col-sm-12 gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'Academic') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <img src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 data-at2x="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>" alt
                                                 style="height: 180px !important; width: 400px !important;">
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="3">
                            <div class="gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'Games') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <img src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 data-at2x="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 style="height: 180px !important; width: 400px !important;" alt>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="4">
                            <div class="gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'Official') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <img src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 data-at2x="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 style="height: 180px !important; width: 400px !important;" alt>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / paralax section -->
    <hr class="divider-color"/>
    <!-- paralax section -->
    <section class="fullwidth-background padding-section">
        <div class="grid-row clear-fix">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="text-center text-uppercase">Success of SCAM</h3>
                            <div class=" row grid-col grid-col-10">
                                <div class="boxs-tab">
                                    <div class="animated fadeIn active">
                                        <div class="success-box">
                                            <?php foreach ($success_gallery as $u) { ?>
                                                <div class="col-sm-3 img-hover-scale">
                                                    <img src="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>"
                                                         data-at2x="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>"
                                                         style="height: 130px !important; width: 360px !important;" alt>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="success-box">
                                            <?php foreach ($success_gallery as $u) { ?>
                                                <div class="col-sm-3 img-hover-scale">
                                                    <a href="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>" data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                                        <img class="img-responsive" src="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>" width="145">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sidebar" style="margin-top:10px;">
                    <!-- widget instructor -->
                    <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                        <div class="row">
                            <h2 class="custom-h2">ABOUT US</h2>
                            <a href="<?= base_url() ?>home/who_we_are"><img class="col-sm-12 img-responsive"
                                 src="<?= base_url() ?>assets/images/about_us/<?= $about_info[0]->image ?>"
                                 style="margin-top:10px;"/></br></a>
                            <h2 class="custom-h2">NOTICE BOARD</h2>
                            <div class="clearfix"></div>
                            <a href="<?= base_url() ?>home/admission">
                                <img src="<?= base_url() ?>assets/images/admission.gif" class="img-responsive" alt=""
                                     style="padding-left:15px;">
                            </a>
                            <h2 style="font-size:23px;" class="custom-h2">VISIT OUR GALLERY</h2>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[0]->image ?>"
                                     class="img-responsive" alt="" style="padding-left:15px; height: 85px">
                            </a>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[1]->image ?>"
                                     height="85px" class="img-responsive" alt=""
                                     style="padding-top:20px;padding-left:15px; height: 85px">
                            </a>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[2]->image ?>"
                                     height="85px" class="img-responsive" alt=""
                                     style="padding-top:20px;padding-left:15px; height: 85px">
                            </a>
                        </div>
                    </aside>
                    <!-- / course finder -->
                </div>
            </div>
        </div>
    </section>
    <!-- paralax section -->

    <hr class="divider-color"/>

    <!-- google map -->
    <div class="wow fadeInUp">
        <div id="gmap"style="height:400px;"></div>
    </div>
    <!-- / google map -->
</div>

<?php $this->load->view('home/footer'); ?>

<?php $this->load->view('home/footer_links'); ?>
<!-- jQuery REVOLUTION Slider  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/home/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.isotope.min.js"></script>

<!-- Image Preview  -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.init.js"></script>

<script>
    google.maps.event.addDomListener(window, "load", init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(23.80109, 90.355761),
            zoom: 15,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
            },
            disableDoubleClickZoom: false,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [	{		"featureType": "landscape",		"stylers": [			{				"hue": "#F1FF00"			},			{				"saturation": -27.4			},			{				"lightness": 9.4			},			{				"gamma": 1			}		]	},	{		"featureType": "road.highway",		"stylers": [			{				"hue": "#0099FF"			},			{				"saturation": -20			},			{				"lightness": 36.4			},			{				"gamma": 1			}		]	},	{		"featureType": "road.arterial",		"stylers": [			{				"hue": "#00FF4F"			},			{				"saturation": 0			},			{				"lightness": 0			},			{				"gamma": 1			}		]	},	{		"featureType": "road.local",		"stylers": [			{				"hue": "#FFB300"			},			{				"saturation": -38			},			{				"lightness": 11.2			},			{				"gamma": 1			}		]	},	{		"featureType": "water",		"stylers": [			{				"hue": "#00B6FF"			},			{				"saturation": 4.2			},			{				"lightness": -63.4			},			{				"gamma": 1			}		]	},	{		"featureType": "poi",		"stylers": [			{				"hue": "#9FFF00"			},			{				"saturation": 0			},			{				"lightness": 0			},			{				"gamma": 1			}		]	}]
        };

        var mapElement = document.getElementById("gmap");
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
            { lat: 23.799944, lng: 90.352295, title: "Shahid Cadet Academy" }
        ];

        var opts = {};
        for (var i = 0; i < locations.length; i++) {
            opts.position = new google.maps.LatLng( locations[ i ].lat, locations[ i ].lng );
            opts.map = map;
            if ( !!locations[ i ] .title ) { opts.title = locations[ i ].title; }
            if ( !!locations[ i ] .description ) { opts.description = locations[ i ].description; }
            marker = new google.maps.Marker( opts );

            (function() {
                var html = [
                    '<div style="background-color: #FFF; color: #000; padding: 5px; width: 150px;">',
                    '{title}',
                    '{description}',
                    '</div>'
                ].join('');

                html = html.replace(/{title}/, !!opts.title ?  ("<h4>" + opts.title + "</h4>") : "" );
                html = html.replace(/{description}/, !!opts.description ?  ("<p>" + opts.description + "</p>") : "" );
                var infoWindow = new google.maps.InfoWindow({ content: html });
                google.maps.event.addListener( marker, 'click', function() {
                    if ( infoWindow.isOpened ) {
                        infoWindow.close();
                        infoWindow.isOpened = false;
                    } else {
                        infoWindow.open( map, this );
                        infoWindow.isOpened = true;
                    }
                });
            })();
        }
    }
</script>
</body>
</html>