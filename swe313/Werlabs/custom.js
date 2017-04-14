(function ($) {
    "use strict";

    //------Select date dropdown--------//

    function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('ul.dropdown > li');
        this.val = '';
        this.index = -1;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents: function () {
            var obj = this;
            obj.dd.on('click', function (event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
            obj.opts.on('click', function () {
                obj.placeholder.removeClass("manual-val");
                var opt = $(this);
                obj.val = opt.text();
                obj.index = opt.index();
                var s = obj.val;
                if (opt.find('a').hasClass('manual-val')) {
                    obj.placeholder.addClass("manual-val");
                    s = obj.val.split(" ")[0];
                }
                obj.placeholder.text(s);
            });
        },
        getValue: function () {
            return this.val;
        },
        getIndex: function () {
            return this.index;
        }
    };

    var dateDD = new DropDown($('#select-date-dropdown'));


    //-------Sticky top---------//
    function sticky_relocate() {
        var window_top = $(window).scrollTop();
        //console.log($('#sticky-anchor-date').length);
        if ($('#sticky-anchor-date').length > 0) {
            var div_top = $('#sticky-anchor-date').offset().top;
            if (window_top > div_top) {
                $('#sticky-wrapper').addClass('stick');
                $('#user-results-wrapper').addClass('sticky-margin');
            } else {
                $('#sticky-wrapper').removeClass('stick');
                $('#user-results-wrapper').removeClass('sticky-margin');
            }
        }
    }

    $(function () {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
    });



    //-------EXPAND TABLE ROW ---------//
    var $tableRows = $('.result-table').find('tr.expandable');
    $('.test-desc-wrapper').slideUp(250);
    $tableRows.on('click', function () {
        var $descRow = $(this).next('tr');
        var $descContent = $descRow.find('.test-desc-wrapper');
        if ($descRow.hasClass("expanded")) {
            $descRow.removeClass("expanded");
            $descContent.slideUp(250);
            $(this).removeClass("open");
                        $descContent.find('.ct-chart').each(function(i,e){
                e.__chartist__.update();
            });
            
        } else {
            $descRow.addClass("expanded");
            $descContent.slideDown(250);
            $(this).addClass("open");
          


    }

    });




})(jQuery);