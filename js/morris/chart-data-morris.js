// First Chart Example - Area Line Chart



Morris.Area({

  // ID of the element in which to draw the chart.

  element: 'morris-chart-area',

  // Chart data records -- each entry in this array corresponds to a point on

  // the chart.

  data: [

	{ d: '2012-10-01', amount: 802 },

	{ d: '2012-10-02', amount: 783 },

	{ d: '2012-10-03', amount:  820 },

	{ d: '2012-10-04', amount: 839 },

	{ d: '2012-10-05', amount: 792 },

	{ d: '2012-10-06', amount: 859 },

	{ d: '2012-10-07', amount: 790 },

	{ d: '2012-10-08', amount: 1680 },

	{ d: '2012-10-09', amount: 1592 },

	{ d: '2012-10-10', amount: 1420 },

	{ d: '2012-10-11', amount: 882 },

	{ d: '2012-10-12', amount: 889 },

	{ d: '2012-10-13', amount: 819 },

	{ d: '2012-10-14', amount: 849 },

	{ d: '2012-10-15', amount: 870 },

	{ d: '2012-10-16', amount: 1063 },

	{ d: '2012-10-17', amount: 1192 },

	{ d: '2012-10-18', amount: 1224 },

	{ d: '2012-10-19', amount: 1329 },

	{ d: '2012-10-20', amount: 1329 },

	{ d: '2012-10-21', amount: 1239 },

	{ d: '2012-10-22', amount: 1190 },

	{ d: '2012-10-23', amount: 1312 },

	{ d: '2012-10-24', amount: 1293 },

	{ d: '2012-10-25', amount: 1283 },

	{ d: '2012-10-26', amount: 1248 },

	{ d: '2012-10-27', amount: 1323 },

	{ d: '2012-10-28', amount: 1390 },

	{ d: '2012-10-29', amount: 1420 },

	{ d: '2012-10-30', amount: 1529 },

	{ d: '2012-10-31', amount: 1892 },

  ],

  // The name of the data record attribute that contains x-amounts.

  xkey: 'd',

  // A list of names of data record attributes that contain y-amounts.

  ykeys: ['amount'],

  // Labels for the ykeys -- will be displayed when you hover over the

  // chart.

  labels: ['amount'],

  // Disables line smoothing

  smooth: false,

});



Morris.Donut({

  element: 'morris-chart-donut',

  data: [

    {label: "CCLC", value: 42.7},

    {label: "JLC", value: 8.3},

    {label: "CSLC", value: 12.8},

    {label: "CNLC", value: 36.2}

  ],

  formatter: function (y) { return y + "%" ;}

});

