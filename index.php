<!DOCTYPE html>
<html lang='en'>
    <head>
        <title> PHP Quiz Challenge </title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0">
    </head>
    <body>
      <h1>PHP Quiz</h1>
        <?php
   $questions = array(

    array( 
        "question" =>'What is the name of Harrys owl?',
        "A" =>'Hedwig',
        "B" =>'Headwing',
        "C" =>'Hogwarts',
        "D" =>'Hagrid'),
    array( 
        "question" =>'What do Hermiones parents do for a living?',
        "A" =>'Doctors',
        "B" =>'Dentists',
        "C" =>'Lawyers',
        "D" =>'Artists'),
    array(  
        "question" =>'Who killed Cedric Diggory?',
        "A" =>'Cho Chang',
        "B" =>'Professor Umbridge',
        "C" =>'Peter Pettigrew',
        "D" =>'Draco Malfoy'),
    array( 
        "question" =>'Who is Tom Marvolo Riddle?',
        "A" =>'Rubeus Hagrid',
        "B" =>'Newt Scamander',
        "C" =>'Barty Crouch Jr.',
        "D" =>'Lord Voldemort'),
    array( 
        "question" =>'What guards Azkaban Prison?',
        "A" =>'Elves',
        "B" =>'Dementors',
        "C" =>'Dragons',
        "D" =>'Boggarts'),
    array(  
        "question" =>'Who is the second oldest Weasley?',
        "A" =>'Bill',
        "B" =>'Percy',
        "C" =>'Charlie',
        "D" =>'Ron'),
    array( 
        "question" =>'Which of these is not an Unforgivable Curse?',
        "A" =>'Avada Kevada',
        "B" =>'Crucio',
        "C" =>'Imperio',
        "D" =>'Revelio'),
     array( 
        "question" =>'What is the name of the Black Family house elf?',
        "A" =>'Kreacher',
        "B" =>'Dobby',
        "C" =>'Winky',
        "D" =>'Sirius'),
    array(  
        "question" =>'What spell is used to help get rid of a boggart?',
        "A" =>'Wingardium Leviosa',
        "B" =>'Avada Kedava',
        "C" =>'Ridikulos',
        "D" =>'Expelliamus'),
    array( 
        "question" =>'Which two teams played in the 422nd Quiddicth World Cup?',
        "A" =>'Austria vs New Zealand',
        "B" =>'Switzerland vs Denmark',
        "C" =>'Belgium vs Ivory Coast',
        "D" =>'Hagrid'),
    array( 
        "question" =>'Who was the first person petrified in Chamber of Secrets book?',
        "A" =>'Hermione Granger',
        "B" =>'Penelope Clearwater',
        "C" =>'Luna Lovegood',
        "D" =>'Colin Creevey'),
    array(  
        "question" =>'What is a squib?',
        "A" =>'A magical person who has non-magical parents',
        "B" =>'A type of plant for a healing potion',
        "C" =>'Non-magical person who is born to at least one magical parent',
        "D" =>'A wand made from a special type of wood'),
    array( 
        "question" =>'What is Nearly Headless Nicks real name?',
        "A" =>'Nicholas de Mimsy-Porpington',
        "B" =>'Nick Popped Poppington',
        "C" =>'Nicholas Nearless Poppington',
        "D" =>'Nicholas de Memsy-Porpington'),
    array( 
        "question" =>'Who below is a Death Eater?',
        "A" =>'Remus Lupin',
        "B" =>'Fenrir Greyback',
        "C" =>'Molly Weasley',
        "D" =>'Nymphodora Tonks'),
    array(  
        "question" =>'How do you free a house elf?',
        "A" =>'You give the elf a hug ',
        "B" =>'You give them a can of food',
        "C" =>'You give them an item of clothing',
        "D" =>'You give them a pat on the head'),
    array( 
        "question" =>'What is Hogwarts Motto?',
        "A" =>'Ante Deum Asto',
        "B" =>'Never tickle a sleeping dragon',
        "C" =>'Audemus jura nostra defendere',
        "D" =>'Giggling dragons are full of fun'),
    array( 
        "question" =>'What is an animagus?',
        "A" =>'A witch or wizard who can’t morph him or herself into an animal at will',
        "B" =>'Latin word for animal',
        "C" =>'A witch or wizard who can morph him or herself into an animal at will',
        "D" =>'A type of animal fungus used to make potions'),
    array(  
        "question" =>'What is the name of the mirror where you see what you most desire?',
        "A" =>'Mirror of True Reflections',
        "B" =>'Mirror of Erised',
        "C" =>'Mirror of Cupidine Speculum',
        "D" =>'The mirror does not exist'),
    array( 
        "question" =>'Which of these is not a Horcrux?',
        "A" =>'Godric Gryffindors Sword',
        "B" =>'Nagini the snake',
        "C" =>'Tom Riddle’s Diary',
        "D" =>'Rowena Ravenclaw’s Diagem'),
    array(  
        "question" =>'What creature is the emblem for Hufflepuff House?',
        "A" =>'A lion',
        "B" =>'A badger',
        "C" =>'A raven',
        "D" =>'A squirrel')    
    );

        for ($i=0; $i<count($questions); $i++)  {
                $quiz = $questions[$i]['question'];
                $optionA = $questions[$i]['A'];
                $optionB = $questions[$i]['B'];
                $optionC = $questions[$i]['C'];
                $optionD = $questions[$i]['D'];
        ?>
        <div id="quizContainer">
        <h4><?php echo $quiz;?></h4>
            <form action ="<?php $_PHP_SELF ?>" method = "POST">
                <input type="radio" name="options" value="A"><?php echo $optionA;?><br>
                <input type="radio" name="options" value="B"><?php echo $optionB;?><br>
                <input type="radio" name="options" value="C"><?php echo $optionC;?><br>
                <input type="radio" name="options" value="D"><?php echo $optionD;?><br>
                </form>
        </div>
        <?php
            }
        ?>
        <input type="submit" name="submitquiz" value="Submit">
        
        <?php
           $answers = array('A','B','C','D','B','C','D','A','C','D','D','C','A','B','C','B','C','B','A','B');
           $score = 0; 
           if (isset($_POST['submitquiz'])) {
               if(!empty($_POST['options'])) {
                   if ($keyanswer == $_POST[$key]) {
                       $score++;
               }
              }
           }
   
           echo "You scored: $score out of count($questions) <br/>";
           ?>
           
    </body>
</html>
