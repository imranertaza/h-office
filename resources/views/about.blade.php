@extends('layouts.master')

@section('title', 'About | h office')

@section('body-class',
    'page page-id-200 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay
    ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    .vc_custom_1421666808685 {
    margin-right: 0px !important;
    margin-left: 0px !important;
    background-color: #333333 !important;
    }

    .vc_custom_1421355037668 {
    margin-right: 0px !important;
    margin-left: 0px !important;
    background-color: #ffffff !important;
    }

    .vc_custom_1426081570820 {
    background-color: #ffffff !important;
    }

    .vc_custom_1426081601185 {
    background-color: #ffffff !important;
    }

    .vc_custom_1421667301019 {
    background-color: #ffffff !important;
    }

    .vc_custom_1423928277224 {
    background-color: #ffffff !important;
    }

    .vc_custom_1421353296553 {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    }

    .vc_custom_1421353287396 {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    }

    .vc_custom_1424329814266 {
    background-color: #e8e8e8 !important;
    }
    .tp-arr-allwrapper {
    display: none;
    }

    .tp-rightarrow.tparrows.default:after {
    content: '\e878';
    }

    .tp-leftarrow.tparrows.default:after {
    content: '\e879';
    }

    .ac_carousel .ac-next,
    .rev_slider_wrapper .ac-next,
    .ac_carousel .ac-prev,
    .rev_slider_wrapper .ac-prev,
    .ac_carousel .tp-rightarrow.default,
    .rev_slider_wrapper .tp-rightarrow.default,
    .ac_carousel .tp-leftarrow.default,
    .rev_slider_wrapper .tp-leftarrow.default {
    background: #fff !important;
    border-radius: 0%;
    color: #fff;
    }

    .ac_carousel .ac-next:before,
    .rev_slider_wrapper .ac-next:before,
    .ac_carousel .ac-prev:before,
    .rev_slider_wrapper .ac-prev:before,
    .ac_carousel .tp-rightarrow.default:before,
    .rev_slider_wrapper .tp-rightarrow.default:before,
    .ac_carousel .tp-leftarrow.default:before,
    .rev_slider_wrapper .tp-leftarrow.default:before {
    color: #666666;
    border-radius: 0%;
    }
@endsection

@section('main-content')
    <article class="post-200 page type-page status-publish hentry ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <!-- START REVOLUTION SLIDER 4.6.0 fullwidth mode -->
                                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                    style="float:left;background-color:#E9E9E9;padding:0px;margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;max-height:428px;">
                                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                                        style="display:none;max-height:428px;height:428px;">
                                        <ul>
                                            <!-- SLIDE  -->
                                            <li data-transition="slidehorizontal" data-slotamount="7"
                                                data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7"
                                                data-saveperformance="off">
                                                <img src="{{ asset('/assets/images/Slider01.jpg') }}"
                                                    alt="Slider01" data-bgposition="center top" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat">
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-transition="slidehorizontal" data-slotamount="7"
                                                data-saveperformance="off">
                                                <img src="{{ asset('/assets/images/Slider02.jpg') }}"
                                                    alt="Slider02" data-bgposition="center top" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat">
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-transition="slidehorizontal" data-slotamount="7"
                                                data-saveperformance="off">
                                                <img src="{{ asset('/assets/images/Slider03.jpg') }}"
                                                    alt="Slider03" data-bgposition="center top" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat">
                                            </li>
                                        </ul>
                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                    </div>
                                    <script type="text/javascript">
                                        var setREVStartSize = function() {
                                            var tpopt = new Object();
                                            tpopt.startwidth = 1140;
                                            tpopt.startheight = 428;
                                            tpopt.container = jQuery('#rev_slider_1_1');
                                            tpopt.fullScreen = "off";
                                            tpopt.forceFullWidth = "off";
                                            tpopt.container.closest(".rev_slider_wrapper").css({
                                                height: tpopt.container.height()
                                            });
                                            tpopt.width = parseInt(tpopt.container.width(), 0);
                                            tpopt.height = parseInt(tpopt.container.height(), 0);
                                            tpopt.bw = tpopt.width / tpopt.startwidth;
                                            tpopt.bh = tpopt.height / tpopt.startheight;
                                            if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                                            if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                                            if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                                            if (tpopt.bh > 1) {
                                                tpopt.bw = 1;
                                                tpopt.bh = 1
                                            }
                                            if (tpopt.bw > 1) {
                                                tpopt.bw = 1;
                                                tpopt.bh = 1
                                            }
                                            tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                                            if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                                            if (tpopt.fullScreen == "on") {
                                                tpopt.height = tpopt.bw * tpopt.startheight;
                                                var cow = tpopt.container.parent().width();
                                                var coh = jQuery(window).height();
                                                if (tpopt.fullScreenOffsetContainer != undefined) {
                                                    try {
                                                        var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                                        jQuery.each(offcontainers, function(e, t) {
                                                            coh = coh - jQuery(t).outerHeight(true);
                                                            if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                                                        })
                                                    } catch (e) {}
                                                }
                                                tpopt.container.parent().height(coh);
                                                tpopt.container.height(coh);
                                                tpopt.container.closest(".rev_slider_wrapper").height(coh);
                                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                                                tpopt.container.css({
                                                    height: "100%"
                                                });
                                                tpopt.height = coh;
                                            } else {
                                                tpopt.container.height(tpopt.height);
                                                tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt
                                                    .height);
                                            }
                                        };
                                        setREVStartSize();
                                        var tpj = jQuery;
                                        tpj.noConflict();
                                        var revapi1;
                                        tpj(document).ready(function() {
                                            if (tpj('#rev_slider_1_1').revolution == undefined)
                                                revslider_showDoubleJqueryError('#rev_slider_1_1');
                                            else
                                                revapi1 = tpj('#rev_slider_1_1').show().revolution({
                                                    dottedOverlay: "none",
                                                    delay: 9000,
                                                    startwidth: 1140,
                                                    startheight: 428,
                                                    hideThumbs: 200,
                                                    thumbWidth: 100,
                                                    thumbHeight: 50,
                                                    thumbAmount: 3,
                                                    simplifyAll: "off",
                                                    navigationType: "none",
                                                    navigationArrows: "solo",
                                                    navigationStyle: "round",
                                                    touchenabled: "on",
                                                    onHoverStop: "on",
                                                    nextSlideOnWindowFocus: "off",
                                                    swipe_threshold: 75,
                                                    swipe_min_touches: 1,
                                                    drag_block_vertical: false,
                                                    keyboardNavigation: "off",
                                                    navigationHAlign: "center",
                                                    navigationVAlign: "bottom",
                                                    navigationHOffset: 0,
                                                    navigationVOffset: 20,
                                                    soloArrowLeftHalign: "left",
                                                    soloArrowLeftValign: "center",
                                                    soloArrowLeftHOffset: 20,
                                                    soloArrowLeftVOffset: 0,
                                                    soloArrowRightHalign: "right",
                                                    soloArrowRightValign: "center",
                                                    soloArrowRightHOffset: 20,
                                                    soloArrowRightVOffset: 0,
                                                    shadow: 2,
                                                    fullWidth: "on",
                                                    fullScreen: "off",
                                                    spinner: "spinner0",
                                                    stopLoop: "off",
                                                    stopAfterLoops: -1,
                                                    stopAtSlide: -1,
                                                    shuffle: "off",
                                                    autoHeight: "off",
                                                    forceFullWidth: "off",
                                                    hideTimerBar: "on",
                                                    hideThumbsOnMobile: "off",
                                                    hideNavDelayOnMobile: 1500,
                                                    hideBulletsOnMobile: "off",
                                                    hideArrowsOnMobile: "off",
                                                    hideThumbsUnderResolution: 0,
                                                    hideSliderAtLimit: 0,
                                                    hideCaptionAtLimit: 0,
                                                    hideAllCaptionAtLilmit: 0,
                                                    startWithSlide: 0
                                                });
                                        });
                                    </script>
                                </div>
                                <!-- END REVOLUTION SLIDER -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid bloc-row vc_custom_1421666808685" style="color:#eeeeee;">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-3 ac_grid_alt wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <h3><span style="color: #ffffff;"><strong>About Us</strong></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-9 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <p>We have been helping brands connect meaningfully with their audiences through strategic thinking and impactful communication. Our team brings a blend of creativity, insight, and experience to deliver branding and marketing solutions that resonate across diverse cultures and lifestyles.</p>
                                <p>From startups to industry leaders, we've partnered with over 400 companies across 100+ product categories—building trust, driving engagement, and adding long-term brand value. As communication continues to evolve globally, we remain committed to staying ahead, adapting with purpose, and delivering work that is both relevant and effective in today's fast-changing world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid bloc-row vc_custom_1421355037668">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-3 ac_grid_alt wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element vc_custom_1426081570820">
                            <div class="wpb_wrapper">
                                <h3><strong>Our<br />Philosophy</strong></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-9 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element vc_custom_1426081601185">
                            <div class="wpb_wrapper">
                                <p>At Head Office Communications, we believe that there’s more to life and business than profits. We are committed to personal values such as honesty, integrity, and spirituality in our work. Our business is socially responsible, and we strive to positively impact the environment and help our community create a better world. Our approach is guided by spiritual values: honesty, integrity, quality, cooperation, service, intuition, accountability, and respect. Head Office Communications is founded on trust and thrives on compassion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid bloc-row vc_custom_1421355037668">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-3 ac_grid_alt wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element vc_custom_1421667301019">
                            <div class="wpb_wrapper">
                                <h3><strong>Our<br />Approach</strong></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-9 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element vc_custom_1423928277224">
                            <div class="wpb_wrapper">
                                <p>We take time to understand our clients, their businesses, and their core objectives. This research process, along with an understanding of their target audience, forms the foundation for our work. We study and evaluate the information collected to develop a thorough strategic plan that serves our clients' goals. Our comprehensive project management process ensures all necessary steps toward these objectives are covered. Finally, we deliver meticulous attention to detail for every project and assess its effectiveness.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-6 wpb_column vc_column_container vc_custom_1421353296553">
                    <div class="wpb_wrapper">
                        <a class="prettyphoto" href="{{ asset('/assets/images/team-1200x800.jpg') }}"
                            rel="prettyPhoto[rel-1492775142]">
                            <div>
                                <div class="ac_image wpb_content_element vc_align_left ac-block-height-no">
                                    <div class="wpb_wrapper">
                                        <img src="{{ asset('/assets/images/team-1200x800.jpg') }}"
                                            width="1200" height="800" alt="team">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="vc_col-sm-6 wpb_column vc_column_container vc_custom_1421353287396">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element bloc-medium bloc-row vc_custom_1424329814266">
                            <div class="wpb_wrapper">
                                <h3 style="text-align: left;"><strong>Real People</strong></h3>
                                <p>We’re a diverse team of talented and passionate professionals at Head Office
                                    Communication. We value mind over matter emphasizing on the ‘human factor’ when
                                    recruiting for our team, hence we are always able to provide ground-breaking customer
                                    service experience to our clients meeting their expectations meticulously. We value
                                    freedom and openness in our organization which is impactful to the creative thought
                                    processing while reaming firm to our commitments.</p>
                                <p>Want to work with us? Write to <a href="mailto:careers@h-office.com">careers@h-office.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </article>
@endsection
