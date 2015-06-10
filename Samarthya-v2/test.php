<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
     
     
            /* JSON Data */  
             //   var jsonData={};                    
             //   document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
            
            /* Adding DataMenu */   
             //   jsonData.jsonMenu=[];       
             //   document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
            
            /* Adding Data into 'jsonMenu' */
              //  var menuData={"data1":"data1", "data2":"data2"};
              //  jsonData.jsonMenu.push(menuData);                   
              //  document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
            
            /* Adding Item of Data in 'jsonMenu' */
               //  jsonData.jsonMenu[0].data3="ASDF";
              //  document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
            
            /* Editing Item of Data in 'jsonMenu' */
               // jsonData.jsonMenu[0].data1='QWERT';
               // document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
               
            /* Deleting Item of Data in 'jsonMenu' */
                // delete jsonData.jsonMenu[0].data1;
                // document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
                
            /* Deleting Data in 'jsonMenu' */
              //  jsonData.jsonMenu.splice(0,1);
              //  document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
                
            /* Deleting 'jsonMenu' */
            //    delete jsonData.jsonMenu;
            //    document.write("JSON : "+JSON.stringify(jsonData)+"<br/>");
        

            var g_hour;
            var g_min;
            var g_sec;
        function load()
        {
            var hour="01"; 
            var min="00";
            var sec="59";
            setInitialTime(hour,min, sec );
            setInterval( function() { document.getElementById("time").innerHTML=timeTest(); } , 1000);
        }
        function setInitialTime(hour,min, sec)
        {
            g_hour=hour;
            g_min=min;
            g_sec=sec;
        }
        
        function timeTest()
        {
            var viewTime=g_hour+":"+g_min+":"+g_sec;
            var parse_hour=parseInt(g_hour);
            var parse_min=parseInt(g_min);
            var parse_sec=parseInt(g_sec);
            
            if(parse_hour===0 && parse_min===0 &&  parse_sec===0)
            {
                viewTime='TimeCompleted';
            }
            else
            {
            if(parse_sec>=0)
            {
               if(parse_sec===0)
                {
                    parse_sec=59;
                    
                    if(parse_min>0)
                    {
                       parse_min=parse_min-1;
                    }
                    else
                    {
                        if(parse_hour>0)
                        {
                           parse_min=59;
                           parse_hour=parse_hour-1; 
                        }
                    }
                } 
                else
                {
                   parse_sec=parse_sec-1;  
                }
            }

            
            
            
        }
            
            g_hour=parse_hour.toString();
            g_min=parse_min.toString();
            g_sec=parse_sec.toString();
            
            if(g_hour.length===1)
            {
                g_hour="0"+g_hour;
            }
            
            if(g_min.length===1)
            {
               g_min="0"+g_min; 
            }
            
             if(g_sec.length===1)
            {
             g_sec="0"+g_sec;   
            }
         
         
            
          return viewTime;
        }
        
        </script>
    </head>
    <body onload="">
        <span id="time"></span>
        <span id="comp"></span>
        <?php
        $str = "Hello World! World! WORLD! World!";
        echo $str . "<br>";
        echo chop($str,"World!");
        // put your code here
        ?>
    </body>
</html>
