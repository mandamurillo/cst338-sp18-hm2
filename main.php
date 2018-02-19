<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="/cst336/cst338-sp18-hm2/style.css">
    </head>

       
      
    
    <body>
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         <h1> Are you feeling funny or interesting ? </h1>
         <p>Type: Interesting or Fun fact</p>
        <img src="http://gph.to/2o9mrWl" alt="cat1" height="100" width="60">
         <p> Please enter wether you want to know 2 Interesting facts or if you want to know some fun facts!<p>
         <input type="text" name="name">
          <input type="submit">
        </form>
        
       
        
        <?php
       
        $userChoice = "";
        
        
       
        echo "<br>";
         echo "<br>";
         echo "<br>";
        echo "<br>";
      
      
    

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $userChoice = htmlspecialchars($_REQUEST['name']); 
   
     if( $userChoice == "Interesting") {
        $interesting = array(" You cannot snore and dream at the same time.",
                         "Coca-Cola would be green if coloring wasn’t added to it",
                         "Men are 6 times more likely to be struck by lightning than women.",
                         "McDonalds calls frequent buyers of their food “heavy users.",
                         "A single cloud can weight more than 1 million pounds.",
                         "One in every five adults believe that aliens are hiding in our planet disguised as humans.",
                         " You burn more calories sleeping than you do watching television.");
        
        $rand_keys = array_rand($interesting, 2);
        echo $interesting[$rand_keys[0]]. "\n";
        echo "<br>";
        echo $interesting[$rand_keys[1]]. "\n";
        
        }
      else if( $userChoice == "Fun fact") {
        $funFact = array ("The world’s oldest piece of chewing gum is over 9,000 years old!",
    " A coyote can hear a mouse moving underneath a foot of snow.",
     " Bolts of lightning can shoot out of an erupting volcano.",
    "New York drifts about one inch farther away from London each year.",
    " A U.S. dollar bill can be folded approximately 4,000 times in the same place before it will tear.",
    "A sneeze travels about 100 miles per hour.",
    " Earth has traveled more than 5,000 miles in the past 5 minutes.",
    "It would take a sloth one month to travel one mile.",
    " 10% of the World’s population is left handed."
        );
        $rand_keys = array_rand($funFact, 2);
        echo $funFact[$rand_keys[0]]. "\n";
        echo "<br>";
        echo "<br>";
        
        
        echo $funFact[$rand_keys[1]]. "\n";
      } 
      
      
     

    if (empty($userChoice)) {
         echo "<br>";
        echo "Empty is not a valid input";
        
        
 
    } 
      
}





$i = 1;
while($i <= 5){
  $x = 1;
  while($x <= 5){
    echo" *". " ";
    $x++;
  }
  echo "<br/>";
  $i++;
}
       ?>
    

    
</body>
<footer>
    

       <img src="/cst336/cst338-sp18-hm2/img/cat2.jpg" class = "cat" alt="cat2" height="300" width="300">


      

    @csumb 
    Maria Evelin Anda-Murillo
    spring 2018
</footer>
    
</html>
