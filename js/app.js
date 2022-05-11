$(document).ready(function(){
   
   // Barchart
    $.ajax({
        url:"http://localhost/datalist/cms/chart-data.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var date = [];
            var pre_tax = [];
            
            for(var i in data) {
                date.push(" Date " + data[i].date);
                pre_tax.push(data[i].pre_tax);

            }
            
    var chartdata = {
        labels: date,
        datasets: [
        {
            label : ' Pre tax amount ',
            backgroundColor: 'rgba(200,200,200,0.75)',
            borderColor: 'rgba(200,200,200,0.75)',
            hoverBackgroundColor: 'rgba(200,200,200, 1)',
            hoverBorderColor: 'rgba(200,200,200, 1)',
            data: pre_tax
        }
    ]
};
var ctx = $("#mycanvas");

var barGraph = new Chart(ctx, {
   type: 'bar',
   data: chartdata 
});

        },
    
        error: function(data){
            console.log(data);
        }
    })
                //Pie chart #1

    $.ajax({
        url:"http://localhost/datalist/cms/categories.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var date = [];
            var pre_tax = [];
            
            for(var i in data) {
                date.push(" Date " + data[i].date);
                pre_tax.push(data[i].pre_tax);

            }
            
    var chartdata = {
        labels: date,
        datasets: [
        {
            label : ' Pre tax amount ',
            backgroundColor: 'rgba(200,200,200,0.75)',
            borderColor: 'rgba(200,200,200,0.75)',
            hoverBackgroundColor: 'rgba(200,200,200, 1)',
            hoverBorderColor: 'rgba(200,200,200, 1)',
            data: pre_tax
        }
    ]
};
var ctx = $("#mycanvas");

var barGraph = new Chart(ctx, {
   type: 'bar',
   data: chartdata 
});

        },
    
        error: function(data){
            console.log(data);
        }
    })


});