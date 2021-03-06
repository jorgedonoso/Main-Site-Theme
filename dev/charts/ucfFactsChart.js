var data = {
	labels: [
		"1992",
		"1993",
		"1994",
		"1995",
		"1996",
		"1997",
		"1998",
		"1999",
		"2000",
		"2001",
		"2002",
		"2003",
		"2004",
		"2005",
		"2006",
		"2007",
		"2008",
		"2009",
		"2010",
		"2011",
		"2012",
		"2013",
		"2014"
	],
	datasets: [
		{
			label: "population",
			fillColor: "rgba(255, 202, 6, .1)",
			strokeColor: "#000",
			pointColor: "#c90",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "#c90",
			data: [
				21682,
				23531,
				25363,
				26323,
				27410,
				28302,
				30009,
				31471,
				33453,
				36013,
				38795,
				41685,
				42837,
				45090,
				46907,
				48699,
				50275,
				53644,
				56337,
				58698,
				59785,
				59770,
				60821
			]
		}
	]
};

var options = {
	scaleShowGridLines: false,
	pointHitDetectionRadius: 3,
	responsive: true,
	toolTipPadding: 10
};

var chartContainer = $('#population-chart');
var canvas = document.createElement('canvas');
var ctx = canvas.getContext('2d');
chartContainer.append(canvas);

var barChart = new Chart(ctx).Line(data, options);