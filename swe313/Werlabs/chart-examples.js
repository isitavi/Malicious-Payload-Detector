(window.charts = function ($) {
    "use strict";

    //---------CHART----------//
//    alert(values.values);
//    alert("ooo");
//    alert("1");
//    alert(results.length);

    if (results.length == 0)
        return;

    for (var i = 0; i < results.length; i++)
    {
//        alert("2");
//alert();
        var tempList = results[i];
        var areaBottom = [];
        var values = [];
        var areaTop = [];
        var dates = [];
        var name = tempList[0].name;

        var id = tempList[0].id;

//        var reference = tempList[0].range.toString().replace(/,/g, ".");
//        var range = parseRange(reference); 

        for (var d = 0; d < tempList.length; d++)
        {
            var res = parseResult(tempList[d].result.toString().replace(/,/g, "."));
            values.push(res);
            if(tempList[d].range.toString().replace(/,/g, ".").match(/\d+/g))
                var range = parseRange(tempList[d].range.toString().replace(/,/g, "."));
            else
                range = [res,res];
            dates.push(tempList[d].date);
            areaBottom.push(range[0]);
            areaTop.push(range[1]);
        }

//alert(values + "    " + areaTop +  "    " + areaBottom);
//alert();
//alert();
//        alert("1");
        var boarders = getChartBorders(values, areaBottom, areaTop);
//        alert("2");
        var chart = new Chartist.Line("#i-" + id, {
            labels: dates,
            //top area,bottom, line
            series: [
                areaTop,
                areaBottom,
                values
            ]
        }, {
            fullWidth: true,
            showArea: true,
            lineSmooth: false,
            low: boarders[0],
            high: boarders[1],
            chartPadding: {
                right: 65
            }

        }, [
            ['screen and (max-width: 400px)', {
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
        ]);
//        alert("3");
// Masking, this could make a great plugin
        chart.on('created', function (ctx) {
            var mask = ctx.svg.elem('defs').elem('mask', {
                id: 'mask1'
            });

            mask.elem('rect', {
                width: '100%',
                height: '100%',
                fill: 'white'
            });

            mask.append(ctx.svg.querySelector('.ct-series.ct-series-b')).querySelector('.ct-area').attr({
                style: 'fill: black'
            });

            ctx.svg.querySelector('.ct-series.ct-series-a').attr({
                mask: 'url(#mask1)'
            });
        });
//        alert("3.1");
        var $tableRows = $('.result-table').find('tr.expandable');
//           alert("3.1.1");
        $tableRows.on('click', function () {
            var $descRow = $(this).next('tr');
            $descRow.find('.ct-chart').each(function (i, e) {
                setTimeout(
                        function ()
                        {

                            e.__chartist__.update();

                        }, 300);
            });
        });
//        alert("3.2");
        chart.on('draw', function (data) {
            // If the draw event was triggered from drawing a point on the line chart
            if (data.type === 'label' && data.axis === 'x') {

                // We just offset the label X position to be in the middle between the current and next axis grid
                data.element.attr({
                    dx: data.x + data.space / 2
                });
                

            }
        });
//alert("4");
    }
//alert("d");


})(jQuery);


function getChartBorders(values, areaBottom, areaTop)
{

    'use strict';

    var areaLow = areaBottom[0];
    var areaHigh = areaTop[0];

    for (var a = 1; a < areaBottom.length; a++)
    {
        if (areaLow < areaBottom[a])
            areaLow = areaBottom[a];
        if (areaHigh < areaTop[a])
            areaHigh = areaTop[a];
    }


    var top;
    var bottom;
    for (var v = 0; v < values.length; v++)
    {
//          alert("value number " + v + " of " +  values.length + "  Top is " + top + " bottom is " + bottom + " value is " + values[v]);

        if (top == undefined && bottom == undefined)
        {
//            alert("check 1");
            top = values[v];
            bottom = values[v];
        }

        else if (top < values[v])
        {
//            alert("check 2");
            top = values[v];
        }
        else if (bottom > values[v])
        {
//            alert("check 3");
            bottom = values[v];
        }
//        alert("check 4");

    }

//    alert("value top is " + top + " value bottom is " + bottom);


    if (areaLow < bottom)
        bottom = areaLow;
    if (areaHigh > top)
        top = areaHigh;


//    alert("refval top is " + top + "refval bottom is " + bottom);

    var margin;
//    if (bottom == 0)
    margin = (top - bottom) * 0.1;


    if (bottom - margin < 0)
        bottom = 0;
    else
        bottom = Number(bottom) - Number(margin);
    
    
//        bottom = Math.floor(Number(bottom) - Number(margin));



//    top = Math.ceil(Number(top) + Number(margin));
    top = Number(top) + Number(margin);
//     alert("margins top is " + top + "margins bottom is " + bottom);
//    alert(borders);

    return [bottom, top];
}

function parseRange(range) {
    'use strict';
//    alert(" a:  " + range);
    range = range.replace(/\s+/g, '');
    range = range.replace(/,/g, ".");
    if (range.indexOf("<") > -1)
    {
        // det är ett max intervall
        range = range.replace(/</g, "");
        var num = Number(range);
        // om det är ett max intervall så sätts första parametern till null
        return [0, num];
    }
//    alert(" b: " + range);
    if (range.indexOf(">") > -1)
    {
        // det är ett min intervall
        range = range.replace(/>/g, "");
        var num = Number(range);
        // om det är ett min intervall så sätts andra parametern till null
        return [num, 0];
    }

//    alert(" c: " + range);
    var numbers = range.split("-");
    if (numbers.length !== 2)
    {
        return;
    }
//    alert(" d: " + range);
    numbers[0] = Number(numbers[0]);
    numbers[1] = Number(numbers[1]);
//        alert(" e: " + range);
    // om det minsta värden inte är fösrt så byts dom så att det är det
    if (numbers[0] > numbers[1])
        return [numbers[1], numbers[0]];
    return numbers;
}

function parseResult(result)
{
    return Number(result.replace("<", "").replace(">", ""));
}

