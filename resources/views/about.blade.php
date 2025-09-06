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
                                                <img src="{{ asset('/assets/wp-content/uploads/2015/02/Slider01.jpg') }}"
                                                    alt="Slider01" data-bgposition="center top" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat">
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-transition="slidehorizontal" data-slotamount="7"
                                                data-saveperformance="off">
                                                <img src="{{ asset('/assets/wp-content/uploads/2015/02/Slider02.jpg') }}"
                                                    alt="Slider02" data-bgposition="center top" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat">
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-transition="slidehorizontal" data-slotamount="7"
                                                data-saveperformance="off">
                                                <img src="{{ asset('/assets/wp-content/uploads/2015/02/Slider03.jpg') }}"
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
                                <p>For the past 12 years, our talented team has brought brands closer to their customers
                                    through innovative approach towards brand strategies and thought-provoking marketing
                                    communication plans that complement their lifestyle and the culture they belong to.</p>
                                <p>We have come across a long way, meticulously and became a trustworthy name in the
                                    communications industry, adding brand value to more than 400 companies and 100
                                    categories of product lines. In the context of ever evolving modality of communications
                                    worldwide, we believe that our passion and commitment to evolve towards excellence and
                                    effectiveness will give our clients the edge that suits the demands of current day
                                    audiences.</p>
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
                                <p>We, at Head office Communications believe that there’s more to life and business than
                                    profits. We believe in representing personal values like honesty, integrity, and
                                    spirituality at work. We make our business socially responsible and try to leave
                                    positive impacts of environment and help the community to create a better world. Our way
                                    of working includes spiritual values like honesty, integrity, quality, cooperation,
                                    service, intuition, accountability, respect and much more. Headoffice Communication is
                                    built on trust and survives on love.</p>
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
                                <p>We like to know our clients, their business and core objectives. Through this research
                                    process and understanding their target audience we form the base that help us move
                                    forward. The collective information we gather is then studied and evaluated to develop
                                    thorough strategic plan that effectively serves client’s goal. We ensure that all
                                    necessary steps to the objectives are covered through comprehensive project management
                                    process. Finally, we ensure the top quality meticulous detail for project of any stature
                                    and assess its effectiveness.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-6 wpb_column vc_column_container vc_custom_1421353296553">
                    <div class="wpb_wrapper">
                        <a class="prettyphoto" href="{{ asset('/assets/wp-content/uploads/2015/01/team-1200x800.jpg') }}"
                            rel="prettyPhoto[rel-1492775142]">
                            <div>
                                <div class="ac_image wpb_content_element vc_align_left ac-block-height-no">
                                    <div class="wpb_wrapper">
                                        <img src="{{ asset('/assets/wp-content/uploads/2015/01/team-1200x800.jpg') }}"
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
                                <p>Want to work with us? Write to <a
                                        href="mailto:careers@h-office.com">careers@h-office.com</a></p>
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
