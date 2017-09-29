<!DOCTYPE html>

<html>

    <link rel="stylesheet" type="text/css" href="part2.css" />

    <head>

        <title>Calendar</title>

    </head>

    <body>

        <?php
$hours_to_show = 12;
            date_default_timezone_set('America/New_York');
 

          

            $time = time();
			
 $current = date("g:i a",$time);   

            $day = date("l", $time);

            $date = date("D, F j, Y", $time);                                                  

           
            function get_hour_string($time){

                $hourinsec = date("g", $time);

                $ampm = date("a", $time);

                return "$hourinsec:00 $ampm";

            }
if(isset($_POST['submit'])){

               $hours_to_show = $_POST["hours_to_show"];

           }
            
        ?>

      

        <div class="div1">

            <h1>

                <?php

                    echo "<br>Calendar<br>";

                    echo "<br><i>Today  </i>: $day";

                    echo "<br><i>Date </i>$date";

                    echo "<br> <i> Time  </i> $current <br>";

                ?>

               

            </h1>

			,<h2> <form method="POST">

                   Display <input type="number" name="hours_to_show">

                   <input type="submit" value="submit" name = "submit">

               </form>
			   </h2>
            <table id="table1">

            <tr>  

                 

                <th class='hd1'></th>

                <th class='header1'>Avinash</th>

                <th class='header1'>Sunveer</th>

                <th class='header1'>Prasad</th>

            </tr>

            </tr>

            

        <?php

        for ($x = 0; $x <= $hours_to_show; $x++) {

            $maintime = get_hour_string($time + $x * 3600 );
            if ($x % 2 == 0) {

                echo "<tr class='odd'> \n ";

                echo "<td class='hd1'>

                            <b>$maintime</b>

                      </td>

                      <td> </td>                      

                      <td> </td>

                      <td> </td> \n";

                echo "</tr> \n";

            }

            if ($x % 2 != 0) {

                echo "<tr class='even'> \n";

                echo "<td class='hd1'>

                            <b>$maintime</b>

                      </td>

                      <td> </td>

                      <td> </td>

                      <td> </td> \n";

                echo "</tr> \n";

            }

        }

        ?>  

            </table>

        </div>
<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
    </a>
</p>
<p>

								<a href="http://validator.w3.org/check/referer">
									<img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML" />
								</a>
							</p>
    </body>

</html>

