/*Dashboard3 Init*/

"use strict";
$(document).ready(function() {
    /*Toaster Alert*/
    $.toast({
        heading: 'Oh snap!',
        text: '<p>Change a few things and try submitting again.</p>',
        position: 'bottom-right',
        loaderBg: '#00acf0',
        class: 'jq-toast-danger',
        hideAfter: 3500,
        stack: 6,
        showHideTransition: 'fade'
    });
});

/*ApexCharts Start*/
window.Apex = {
    stroke: {
        width: 3
    },
    markers: {
        size: 0
    },
    tooltip: {
        fixed: {
            enabled: true,
        }
    }
};

var randomizeArray = function(arg) {
    var array = arg.slice();
    var currentIndex = array.length,
        temporaryValue, randomIndex;

    while (0 !== currentIndex) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

// data for the sparklines that appear below header area
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];
var spark1 = {
    chart: {
        type: 'area',
        height: 60,
        sparkline: {
            enabled: true
        },
    },
    colors: ['#00acf0'],
    stroke: {
        curve: 'straight',
        colors: ['#00acf0'],
    },
    fill: {
        opacity: 0.3,
        colors: ['#00acf0'],
    },
    series: [{
        data: randomizeArray(sparklineData)
    }],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    yaxis: {
        min: 0
    }
}
var spark2 = {
    chart: {
        type: 'area',
        height: 60,
        sparkline: {
            enabled: true
        },
    },
    colors: ['#ffbf36'],
    stroke: {
        curve: 'straight',
        colors: ['#ffbf36'],
    },
    fill: {
        opacity: 0.3,
        colors: ['#ffbf36'],
    },
    series: [{
        data: randomizeArray(sparklineData)
    }],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    yaxis: {
        min: 0
    }
}
var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
spark1.render();
var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
spark2.render();

var optionsLine = {
    chart: {
        height: 390,
        type: 'line',
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2
    },
    colors: ["#00acf0", '#ffbf36', '#22af47'],
    series: [{
            name: "Poin",
            data: [1250, 1590, 2678, 2080, 1330, 2320, 1900, 950, 1010, 900]
        },
        {
            name: "Target Yudisium",
            data: [1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000]
        },
        {
            name: "Target Sidang",
            data: [759, 759, 759, 759, 759, 759, 759, 759, 759, 759]
        }
    ],
    markers: {
        size: 3,
        strokeWidth: 0,
        hover: {
            size: 9
        }
    },
    grid: {
        show: true
    },
    labels: ['AKT', 'MNJ', 'PSI', 'KOM', 'DPI', 'DKV', 'INF', 'SIF', 'TSP', 'ARS'],
    xaxis: {
        tooltip: {
            enabled: false
        }
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        offsetY: 0
    }
}

var chartLine = new ApexCharts(document.querySelector('#e_chart_1'), optionsLine);
chartLine.render();


var options = {
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['AKT', 'MNJ', 'PSI', 'KOM', 'DPI', 'DKV', 'INF', 'SIF', 'TSP', 'ARS'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return "$ " + val + " thousands"
            }
        }
    }
};

var chartb = new ApexCharts(document.querySelector("#chart_bar"), options);
chartb.render();

var options_tahun_ini = {
    series: [{
        name: 'Poin Tertinggi',
        type: 'column',
        data: [1250, 1590, 2678, 2080, 1330, 2320, 1900, 950, 1010, 900]
    }, {
        name: 'Target yudisium',
        type: 'area',
        data: [1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000]
    }, {
        name: 'Target sidang',
        type: 'line',
        data: [750, 750, 750, 750, 750, 750, 750, 750, 750, 750]
    }],
    chart: {
        height: 350,
        type: 'line',
        stacked: false,
    },
    stroke: {
        width: [0, 2, 5],
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '50%'
        }
    },

    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['AKT', 'MNJ', 'PSI', 'KOM', 'DPI', 'DKV', 'INF', 'SIF', 'TSP', 'ARS'],
    markers: {
        size: 0
    },
    xaxis: {
        //type: 'datetime'
    },
    yaxis: {
        title: {
            text: 'Points',
        },
        min: 0
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function(y) {
                if (typeof y !== "undefined") {
                    return y.toFixed(0) + " points";
                }
                return y;

            }
        }
    }
};

var chartc = new ApexCharts(document.querySelector("#chart_tahun_ini"), options_tahun_ini);
chartc.render();


function generateData(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

        series.push([x, y, z]);
        baseval += 86400000;
        i++;
    }
    return series;
}

var options2 = {
    chart: {
        height: 315,
        type: 'bubble',
        toolbar: {
            show: false
        }
    },
    colors: ["#00acf0", '#ffbf36', '#22af47'],
    dataLabels: {
        enabled: false
    },
    series: [{
            name: 'Bubble1',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble2',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble3',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        },
        {
            name: 'Bubble4',
            data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                min: 10,
                max: 60
            })
        }
    ],
    fill: {
        opacity: 0.8
    },
    title: {
        show: false
    },
    xaxis: {
        tickAmount: 12,
        type: 'category',
    },
    yaxis: {
        max: 70
    },
    legend: {
        show: false
    }
}
var chart2 = new ApexCharts(
    document.querySelector("#e_chart_2"),
    options2
);
chart2.render();

var optionsCircle4 = {
    chart: {
        type: 'radialBar',
        width: 390,
        height: 445,
    },
    plotOptions: {
        radialBar: {
            size: undefined,
            inverseOrder: true,
            hollow: {
                margin: 5,
                size: '48%',
                background: 'transparent',

            },
            track: {
                show: false,
            },
            startAngle: -180,
            endAngle: 180

        },
    },
    stroke: {
        lineCap: 'round'
    },
    colors: ["#00acf0", '#ffbf36', '#22af47'],
    series: [71, 63, 77],
    labels: ['June', 'May', 'April'],
    legend: {
        show: true,
        floating: true,
        position: 'right',
        offsetX: 70,
        offsetY: 240
    },
}

var chartCircle4 = new ApexCharts(document.querySelector('#e_chart_3'), optionsCircle4);
chartCircle4.render();
/*ApexCharts End*/

/*****E-Charts function start*****/
var echartsConfig = function() {
        if ($('#e_chart_4').length > 0) {
            var eChart_4 = echarts.init(document.getElementById('e_chart_4'));
            var option4 = {
                tooltip: {
                    show: true,
                    trigger: 'axis',
                    backgroundColor: '#fff',
                    borderRadius: 6,
                    padding: 6,
                    axisPointer: {
                        lineStyle: {
                            width: 0,
                        }
                    },
                    textStyle: {
                        color: '#324148',
                        fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Nunito,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"',
                        fontSize: 12
                    }
                },
                grid: {
                    top: '3%',
                    left: '3%',
                    right: '3%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    boundaryGap: false,
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    axisLine: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
                    axisLabel: {
                        textStyle: {
                            color: '#5e7d8a'
                        }
                    }
                },
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
                    axisLabel: {
                        textStyle: {
                            color: '#5e7d8a'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: '#eaecec',
                        }
                    }
                },

                series: [{
                        data: [420, 332, 401, 334, 400, 330, 410],
                        type: 'line',
                        symbolSize: 0,
                        smooth: true,
                        itemStyle: {
                            color: '#00acf0',
                        },
                        lineStyle: {
                            color: '#00acf0',
                            width: 3,
                        },
                        areaStyle: {
                            color: '#00acf0',
                            opacity: .3
                        },
                    },
                    {
                        data: [220, 182, 291, 134, 290, 130, 210],
                        type: 'line',
                        symbolSize: 0,
                        smooth: true,
                        itemStyle: {
                            color: '#ffbf36',
                        },
                        lineStyle: {
                            color: '#ffbf36',
                            width: 3,
                        },
                        areaStyle: {
                            color: '#ffbf36',
                            opacity: .8
                        },
                    }
                ]
            };
            eChart_4.setOption(option4);
            eChart_4.resize();
        }

        if ($('#e_chart_10').length > 0) {
            var eChart_10 = echarts.init(document.getElementById('e_chart_10'));

            var option9 = {
                tooltip: {
                    show: true,
                    backgroundColor: '#fff',
                    borderRadius: 6,
                    padding: 6,
                    axisPointer: {
                        lineStyle: {
                            width: 0,
                        }
                    },
                    textStyle: {
                        color: '#324148',
                        fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Nunito,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"',
                        fontSize: 12
                    }
                },
                series: [{
                    name: '',
                    type: 'pie',
                    radius: ['40%', '60%'],
                    color: ["#00acf0", '#ffbf36', '#22af47'],
                    data: [
                        { value: 435, name: '' },
                        { value: 679, name: '' },
                        { value: 848, name: '' },
                    ],
                    label: {
                        normal: {
                            formatter: '{b}\n{d}%'
                        },

                    }
                }]
            };
            eChart_10.setOption(option9);
            eChart_10.resize();
        }
    }
    /*****E-Charts function end*****/

/*****Resize function start*****/
var echartResize;
$(window).on("resize", function() {
    /*E-Chart Resize*/
    clearTimeout(echartResize);
    echartResize = setTimeout(echartsConfig, 200);
}).resize();
/*****Resize function end*****/

/*****Function Call start*****/
echartsConfig();
/*****Function Call end*****/