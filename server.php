
<?php
require_once("head.html");
?>
   <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="http://monitor.biopano.org/status.js"></script>
   <script>
$(function () {                                                                     
    $(document).ready(function() {                                                  
        Highcharts.setOptions({                                                     
            global: {                                                               
                useUTC: false                                                       
            }                                                                       
        });                                                                         
                                                                                    
        var chart,str="<br />",info=[],status=[];
           for(h in data2){
     
                              info.push({
                                    name:data2[h].database_center+"@"+data2[h].location,
                                    data:data2[h].history
                                });
                              status.push({
                                    name:data2[h].database_center+"@"+data2[h].location,
                                    status:data2[h].status,
                                    load:data2[h].lavg_1
                              });
                                
                            }  
for(s in status){
    if(status[s].status=="up" && status[s].load < 8){
        img = '<img src="img/green.png" style="width:20px;padding: 0;margin-right:0.5em ">';
        
    }
   if (status[s].status=="up" && status[s].load > 8) {
       img = '<img src="img/yellow.png" style="width:20px;padding: 0;margin-right:0.5em">';
        }
 if (status[s].status!="up" ) {
      img = '<img src="img/red.png" style="width:20px;padding: 0;margin-right:0.5em">';
        }
        str = str + img + status[s].name+"<br /><br />";
   }
$("#server_status").html(str);

   $('#container').highcharts({                                                
            chart: {                                                                
                type: 'spline',                                                     
                animation: Highcharts.svg, // don't animate in old IE               
                marginRight: 10,                                             
            },                                                                      
            title: {                                                                
                text: 'Server Load  Status in Hours'   //主标题                                         
            },                                                                      
            xAxis: {                     //X轴                                           
                type: 'datetime',                                                   
                tickPixelInterval: 150                                              
            },                                                                      
            yAxis: {                     //Y轴                                           
                title: {                                                            
                    text: 'Load Status'                                                   
                },                                                                  
                plotLines: [{                                                       
                    value: 0,                                                       
                    width: 1,                                                       
                    color: '#808080'                                                
                }]                                                                  
            },                                                                      
            tooltip: {                                                              
                formatter: function() {                                             
                        return '<b>'+ this.series.name +'</b><br>'+                
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br>'+
                        Highcharts.numberFormat(this.y, 2);                         
                }                                                                   
            },                                                                      
            legend: {                                                               
                enabled: false                                                      
            },                                                                      
            exporting: {                                                            
                enabled: false                                                      
            },   
             series:info                                                                               
        });   
           
                                                                      
    });                                                                             
                                                                                    
});  
  </script>
<div class="main-content">
     <div class="row large-12 columns large-centered">
    
     <div id="container" style="min-width:400px;height:400px;"></div>
      <div id="server_status" style="padding:2em">
         
     </div>
</div>
  </div>

<?php
require_once("foot.html");
?>
