(function ($) {
    "use strict";

    var $tabs = $('.tab');
    $('.tab-content').slideUp(0);
    $('#doctor-comment-expand').slideUp(0);
    $('#btn-toggle-comment-in').hide();
    var currentID = "";
    var $svgWrap = $('#fullbody-wrapper');
    var $hotspots = $('.hotspot');
    var $buttons = $('.analysis-desc-wrapper').find('button');
    var selectedBtn = "";

    /*-------DOCTOR COMMENTS-------*/
    $('#btn-toggle-comment-out').on('click', function () {
        $('#btn-toggle-comment-out').hide();
        $('#doctor-comment-expand').slideDown("slow");
        $('#btn-toggle-comment-in').show();

    });
    $('#btn-toggle-comment-in').on('click', function () {
        $('#btn-toggle-comment-in').hide();
        $('#doctor-comment-expand').slideUp("slow");
        $('#btn-toggle-comment-out').show();

    });

    /*-------TABS--------*/
    var isAnimating = false;
    $tabs.on('click', function () {
        if (!isAnimating) {
            isAnimating = true;
            var id = $(this).attr('id');
            //Hide table with results
            $('#analysis-results-wrapper').hide();
            $('#analysis-target-desc').hide();
            $('#analysis-related-results-wrapper').hide();

            //Reset all buttonstates
            $buttons.removeClass("selected");
            selectedBtn = "";

            if (currentID) {
                //Another tab is currently clicked
                $('#' + currentID).removeClass("current");
                $(this).addClass("current");

                //Hide svg-body
                $svgWrap.hide();

                //Slide up current content
                $('#' + currentID + "-content").slideUp(500, function () {
                    //Slide down new content
                    $('#' + id + "-content").stop();
                    $('#' + id + "-content").slideDown(500, function () {
                        if (id + "-content" != "tab1-content")
                        showBody();
                        isAnimating = false;
                    });

                });
                currentID = id;
            } else {
                //No tab is currently selected
                $(this).addClass("current");
                currentID = id;

                //Slide down content	
                $('#' + id + "-content").slideDown(500, function () {
                     if (id + "-content" != "tab1-content")
                    showBody();
                    isAnimating = false;
                });
            }

            if (id + "-content" == "tab1-content")
            {
                $(".analysis-desc-wrapper").hide();
            }
            else
            {
                $(".analysis-desc-wrapper").show();
            }
            //Show connected hotspots
            var hotspotArray = $(this).data('hotspots').split(" ");
            TweenMax.set($hotspots.find('path'), {scaleX: 1, scaleY: 1, alpha: 1, overwrite: true});
            setHotspots(hotspotArray);


        }

        return false;
    });

    /*----------BUTTONS----------*/
    $buttons.on({
        "mouseover": function () {

            var targetId = $(this).parent().data('target');
            if (targetId !== "") {
                var $target = $('#' + targetId).find('.hotspot');

                if (selectedBtn === "") {
                    //No button has been selected --> change color of all other hotspots
                    TweenMax.set($hotspots.find('path'), {fill: '#fac0c0'});
                }
                if (selectedBtn !== targetId) {
                    //This button is not the currently selected --> highlight and animate hotspot 
                    TweenMax.set($target.find('path'), {fill: '#F48080'});
                    if (msieversion()) {
                        TweenMax.fromTo($target, 1, {alpha: 1}, {alpha: 0.5, yoyo: true, repeat: -1, overwrite: true});
                    } else {
                        TweenMax.fromTo($target, 1, {scaleX: 1, scaleY: 1}, {scaleX: 1.2, scaleY: 1.2, yoyo: true, repeat: -1, overwrite: true});
                    }

                }
            }
            return false;
        },
        "mouseout": function () {
            var targetId = $(this).parent().data('target');
            if (targetId !== "") {
                var $target = $('#' + targetId).find('.hotspot');

                if (selectedBtn === "") {
                    //No button has been selected --> reset color and size of all hotspots
                    TweenMax.set($hotspots.find('path'), {fill: '#F48080'});
                    if (msieversion()) {
                        TweenMax.to($target, 1, {alpha: 1, yoyo: false, repeat: 0, overwrite: true});
                    } else {
                        TweenMax.to($target, 1, {scaleX: 1, scaleY: 1, yoyo: false, repeat: 0, overwrite: true});
                    }
                } else {
                    if (selectedBtn !== targetId) {
                        //This button is not the currently selected --> set color to not current and reset size 
                        TweenMax.set($target.find('path'), {fill: '#fac0c0'});
                        if (msieversion()) {
                            TweenMax.to($target, 1, {alpha: 1, yoyo: false, repeat: 0, overwrite: true});
                        } else {
                            TweenMax.to($target, 1, {scaleX: 1, scaleY: 1, yoyo: false, repeat: 0, overwrite: true});
                        }

                    } else {
                        //This button is the currently selected --> set color to highlighted and bigger size 
                        if (msieversion()) {
                            TweenMax.to($target, 1, {alpha: 1, yoyo: false, repeat: 0, overwrite: true});
                        } else {
                            TweenMax.to($target, 1, {scaleX: 1.2, scaleY: 1.2, yoyo: false, repeat: 0, overwrite: true});
                        }

                    }
                }
            }
            return false;

        },
        "click": function () {

            return false;
            //---Highlight clicked button
            $buttons.addClass("selected");
            $(this).removeClass("selected");

            //---Set hotspots
            var targetId = $(this).parent().data('target');
            if (selectedBtn !== "") {
                //A button has been selected --> reset color and size of hotspots
                var currentHS = $('#' + selectedBtn).find('.hotspot');
                TweenMax.set(currentHS.find('path'), {fill: '#fac0c0'});
                if (msieversion()) {
                    TweenMax.to(currentHS, 0.5, {alpha: 1, yoyo: false, repeat: 0, overwrite: true});
                } else {
                    TweenMax.to(currentHS, 0.5, {scaleX: 1, scaleY: 1, yoyo: false, repeat: 0, overwrite: true});
                }
            }
            selectedBtn = targetId;
            var $target = $('#' + targetId).find('.hotspot');
            //Highlight connected hotspots
            TweenMax.set($target.find('path'), {fill: '#F48080'});
            if (msieversion()) {
                TweenMax.to($target, 0.5, {alpha: 1, yoyo: false, repeat: 0, overwrite: true});
            } else {
                TweenMax.to($target, 0.5, {scaleX: 1.2, scaleY: 1.2, yoyo: false, repeat: 0, overwrite: true});
            }

            var topY = 0;
            if (currentID != "tab1") {
                $('#analysis-target-desc').show();
                $('#analysis-related-results-wrapper').show();

                topY = $('#analysis-target-desc').offset().top;
            } else {
                //Show table with results
                $('#analysis-target-desc').show();
                $('#analysis-related-results-wrapper').show();
                topY = $('#analysis-target-desc').offset().top;
            }

            TweenMax.to($(window), 1, {scrollTo: {y: topY, autoKill: true}, ease: Power3.easeOut});

            return false;
        }
    });

    function msieversion() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
            return true;
        else                 // If another browser, return 0
            return false;
    }
    msieversion();
    /*------HOTSPOTS-------*/
    function setHotspots(array) {
        $hotspots.each(function () {
            if (array.indexOf($(this).parent().attr('id')) > -1) {
                $(this).show();
                //Reset color of all hotspots
                TweenMax.set($(this).find('path'), {fill: '#F48080'});
            } else {
                $(this).hide();
            }
        });
    }

    /*--------SVG-BODY-------*/
    function showBody() {
        //Set size and position of body-svg	
        //get current wrapper
        var $currContent = $('#' + currentID + "-content").find('.analysis-desc-wrapper');

        var descY = $currContent.position().top;
        var descH = $currContent.outerHeight();
        var svgH = $svgWrap.outerHeight();
        if ($(window).width() > 750) {
            $svgWrap.css('top', descY + ((descH - svgH) / 2) + 50);
            $svgWrap.css('margin-right', 'auto');
        } else {
            $svgWrap.css('top', descY + 250);
            $svgWrap.css('margin-right', 50);
        }
        $svgWrap.show();
    }

    $('#tab1').trigger("click");

    $(window).resize(function () {
        showBody();
    });

})(jQuery);