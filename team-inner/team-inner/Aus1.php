<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice">
    <style>
        * {
            box-sizing: border-box;
        }
        
        #body {
            font-family: "Alice";
            
            
        }
        
       
        #article {
            margin-top: 47px;
            margin-left: 50px;
            float: left;
            padding: 20px;
            width: 90%; 
            height: auto;
            /* only for demonstration, should be removed */
        }
        /* Clear floats after the columns */
    </style>
</head>

<body id="body">

   <article id="article">



            <h2>Australia Cricket Team</h2>
            <br>
            <img src="team-inner/aus.jpg" style="width:550px;height:280px;border:1px solid black;margin-left:200px;">
           <br><br>
            <p>The Australian cricket team is the most successful team in the Cricket World Cup winning the 1987, 1999, 2003, 2007 and 2015 editions. This also makes them the only team to have won the world cup in all the regions (group of countries) that
                have hosted the world cup ow. Besides, Australia had reached the finals of the 1975 and 1996 World cups losing to West Indies and Sri Lanka respectively. They also reached quarterfinals of 2011 Cricket World Cup, and were knocked out in
                first round three times : 1979, 1983 and 1992. Though they have won world cup record five times, they are also the only team considered as tournament favorites for ery world cup, right from 1975 to present. The team has played total 85
                world cup matches, the highest of any team. Its overall win-loss record is 61-21 (which gives it the highest win percentage among all teams playing the world cup), with one tied match and two being abandoned due to rain.</p>
                
           <?php
                 include "ausconnect.php";
            ?>


            
        </article>
 


</body>

</html>