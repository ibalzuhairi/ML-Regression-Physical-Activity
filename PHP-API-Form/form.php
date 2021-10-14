<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <script>
            function predict() {
            var AD_Month = $("#AD_Month").val();
            var AH_Month  = $("#AH_Month").val();
             var Long_Vacation = $("#Long_Vacation").val();
              var  AD_WeekdayNum = $("#AD_WeekdayNum").val();
               var Woke_Hour = $("#Woke_Hour").val();
                var temp_min = $("#temp_min").val();
                 var temp_max = $("#temp_max").val();   
    var Lag1 = $("#Lag1").val();
     var Lag2 = $("#Lag2").val();
             var Lag3 = $("#Lag3").val();
             var Lag4 = $("#Lag4").val();
             var Lag5 = $("#Lag5").val();
            var Lag6 = $("#Lag6").val();
            var Lag7 = $("#Lag7").val();
            var Lag8 = $("#Lag8").val();
                     var res = $.post("Predict.php",{AD_Month:AD_Month,
                     AH_Month:AH_Month,
                        Long_Vacation:Long_Vacation,
                    AD_WeekdayNum:AD_WeekdayNum,
                Woke_Hour:Woke_Hour,
            temp_min:temp_min,
        temp_max:temp_max,
    Lag1:Lag1,
    Lag2:Lag2,
    Lag3:Lag3,
    Lag4:Lag4,
    Lag5:Lag5,
    Lag6:Lag6,
    Lag7:Lag7,
    Lag8:Lag8});
 res.done(function(d) {
//        var jd = JSON.parse(d);
$("#prediction").html(d);

    });
            }
            </script>
    </head>
    <body>
        <center><h1 id='title'>Steps Prediction</h1></center>
        <form action="" method="post">
            <div class="container">
                <center>
                    <table>
                        <tr>
                           
                            <th>Georgian Calendar Month</th>
                            <th>Lunar Calendar Month</th>
                            <th>Is it Long Vacation (1 true, 0 false)</th>
                            <th>Weekday number 0-6</th>
                            <th>Hour you woke up</th>
                           
                            <th>Minimum temperature</th>
                            <th>Maximum temperature</th>
                            <th>Lag1</th>
                            <th>Lag2</th>
                            <th>Lag3</th>
                            <th>Lag4</th>
                            <th>Lag5</th>
                            <th>Lag6</th>
                            <th>Lag7</th>
                            <th>Lag8</th>
                        </tr>
                    <!--    <tr>
                            <td><input class='checkbox' type="checkbox" checked name="Steps"  id="Steps" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="AD_Month" id ="AD_Month" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="AH_Month" id="AH_Month" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Long_Vacation" id="Long_Vacation" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="AD_WeekdayNum" id="AD_Weekdaynum" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Woke_Hour" id="Woke_Hour" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="temp_min" id="temp_min" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="temp_max" id="temp_max" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag1" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag2" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag3" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag4" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag5"  id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag6" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag7" id="Lag1" value="0"/></td>
                            <td><input class='checkbox' type="checkbox" checked name="Lag8" value="0"/></td>
                        </tr>
                    -->
                        <tr>
                           <!-- <td><input class='input' type="text" checked name="Steps" id="Steps" value="0"/></td>-->
                            <td><input class='input' type="text" checked name="AD_Month" id="AD_Month" value="0"/></td>
                            <td><input class='input' type="text" checked name="AH_Month" id="AH_Month" value="0"/></td>
                            <td><input class='input' type="text" checked name="Long_Vacation" id="Long_Vacation" value="0"/></td>
                            <td><input class='input' type="text" checked name="AD_WeekdayNum" id="AD_WeekdayNum" value="0"/></td>
                            <td><input class='input' type="text" checked name="Woke_Hour" id="Woke_Hour" value="0"/></td>
                            <td><input class='input' type="text" checked name="temp_min" id="temp_min" value="0"/></td>
                            <td><input class='input' type="text" checked name="temp_max" id="temp_max" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag1"  id="Lag1" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag2" id="Lag2" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag3" id="Lag3" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag4" id="Lag4" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag5" id="Lag5" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag6" id="Lag6" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag7" id="Lag7" value="0"/></td>
                            <td><input class='input' type="text" checked name="Lag8" id="Lag8" value="0"/></td>
                        </tr>
                    </table>
                </center>
                
                <div>
                    <span style='font-size:100px;'></span>
                    <input type="button" class='button'  onclick="predict();" value="Forecast &#128521;">                
                </div>
                
                <div class="messageCont">
                    <span class='message' > predicted <span id ='prediction' style="font-weight: 800;">00</span> steps for the next day.</span>
                </div>
               

            </div>



        </form>
        
    </body>
</html>