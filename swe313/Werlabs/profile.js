(function ($) {
    "use strict";


    $('button.radio').on('click', function (e) {
        $(this).toggleClass("selected");
        e.preventDefault();
    });

    var $slider = $(".simpleslider");
    var dragElem = $slider.find('.drag-elem');
    var container = dragElem.parent();
    var steps = 3;
    var stepWidth = (container.width() - dragElem.outerWidth()) / steps;
    Draggable.create(dragElem, {
        type: "x",
        edgeResistance: 1,
        bounds: container,
        liveSnap: true,
        snap: {
            x: function (endValue) {
                var dist = Math.round(endValue / stepWidth) * stepWidth;
                var perc = Math.round(endValue / stepWidth) * (100 / steps);

                return dist;
            }
        },
        onDragStart: function () {

        }
    });
    TweenMax.set(dragElem, {x: container.width() * 0.48});

})(jQuery);

