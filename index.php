<!DOCTYPE html>
<html lang='en'>
    <head>
        <title> PHP Quiz Challenge </title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
    </head>
    <body>
        <div class="quizContainer">
                <div id="sidebar1" class="sidebars"></div>

                <div id="sidebar2" class="sidebars">
                        <h1>Harry Potter Quiz</h1>
                        <h4> How well do you know Harry Potter? Take the quiz below to find out!</h4> 
               
                        <form action ="<?php $_PHP_SELF ?>" method = "POST">
                
                                <?php
                                $questions = array(
                                                array( 
                                                        "question" =>'What is the name of Harrys owl?',
                                                        "A" =>'Hedwig',
                                                        "B" =>'Headwing',
                                                        "C" =>'Hogwarts',
                                                        "D" =>'Hagrid'),
                                                array( 
                                                        "question" => "What do Hermiones parents do for a living?",
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
                                                        "question" => 'Which of these is not an Unforgivable Curse?',
                                                        "A" =>'Avada Kedavra',
                                                        "B" =>'Crucio',
                                                        "C" =>'Imperio',
                                                        "D" =>'Revelio'),
                                                array( 
                                                        "question" =>'What is the name of the Black Family house elf?',
                                                        "A" =>'Kreacher',
                                                        "B" =>'Dobby',
                                                        "C" =>'Elfie',
                                                        "D" =>'Sirius'),
                                                array( 
                                                        "question" =>'What spell is used to help get rid of a boggart?',
                                                        "A" =>'Wingardium Leviosa',
                                                        "B" =>'Avada Kedava',
                                                        "C" =>'Riddikulus',
                                                        "D" =>'Expelliamus'),
                                                array( 
                                                        "question" =>'Which two teams played in the 422nd Quiddicth World Cup?',
                                                        "A" =>'Austria vs New Zealand',
                                                        "B" =>'Switzerland vs Denmark',
                                                        "C" =>'Belgium vs Ivory Coast',
                                                        "D" =>'Bulgaria vs Ireland'),
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
                                                        "C" =>'Non-magical person who is born to at least one magical parent  ',
                                                        "D" =>'A wand made from a special type of wood'),
                                                array( 
                                                        "question" => "What is Nearly Headless Nick's real name?",
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
                                                        "A" =>'You give the elf a hug',
                                                        "B" =>'You give them a can of food',
                                                        "C" =>'You give them an item of clothing',
                                                        "D" =>'You give them a pat on the head'),
                                                array( 
                                                        "question" => "What is Hogwart's Motto?",
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
                                                        "A" =>"Godric Gryffindor's Sword",
                                                        "B" =>'Nagini the snake',
                                                        "C" =>'Tom Riddle’s Diary',
                                                        "D" =>'Rowena Ravenclaw’s Diagem'),
                                                array( 
                                                        "question" =>'What creature is the emblem for Hufflepuff House?',
                                                        "A" =>'A lion',
                                                        "B" =>'A badger',
                                                        "C" =>'A raven',
                                                        "D" =>'A squirrel'),
                                                );
                
                                for ($i=0; $i<count($questions) - 1; $i++)  {
                                        $quiz = $questions[$i]['question'];
                                        $optionA = $questions[$i]['A'];
                                        $optionB = $questions[$i]['B'];
                                        $optionC = $questions[$i]['C'];
                                        $optionD = $questions[$i]['D'];
                                
                                ?>
                                        <div class="questOptions">
                                                <h5><?php echo $quiz;?></h5>
                                                        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $optionA;?>"><?php echo $optionA;?><br>
                                                        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $optionB;?>"><?php echo $optionB;?><br>
                                                        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $optionC;?>"><?php echo $optionC;?><br>
                                                        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $optionD;?>"><?php echo $optionD;?><br>
                                        </div>
                                <?php
                                        }
                                ?>
                                        <input type="submit" name="submit" value="Submit" id="submitBtn">
                        </form>
                </div>

        </div>

        <div id="sidebar4"> 
            <?php
            

            //check if selected answer is correct
            if (isset($_POST['submit'])) {
                $score = 0;
                $answers = array("Hedwig", "Dentists", "Peter Pettigrew", "Lord Voldemort", "Dementors", "Charlie", "Revelio", "Kreacher", "Riddikulus", "Bulgaria vs Ireland", "Colin Creevey", "Non-magical person who is born to at least one magical parent", "Nicholas de Mimsy-Porpington", "Fenrir Greyback", "You give them an item of clothing", "Never tickle a sleeping dragon", "A witch or wizard who can morph him or herself into an animal at will", "Mirror of Erised", "Godric Gryffindor's Sword");

                if(!empty($_POST['submit'])) {
                        foreach($_POST as $userChoice=> $calculate) {
                                switch($calculate) {
                                        case $answers[$userChoice]: $score++;
                                }
                        }
                }
                echo "<h3> You scored ".$score." out of 20 </h3>";
                }     
                
            if(isset($_POST['submit'])){
            if($score >= 0 && $score <= 5) {
                    echo "<h3>Avada Kedava! You don't deserve to live!</h3>";
                } else if ($score >= 5 && $score <= 10) {
                    echo "<h3> Not knowing enough about Harry Potter is a crime. Sending you straight to Azkaban. Life without chance of parole.</h3>";
                } else if ($score >= 11 && $score <= 15) {
                    echo "<h3> Well Done! 10 points for Gryffindor!</h3>";
                } else if ($score >= 16 && $score <= 20) {
                    echo "<h3>You really are the brightest witch of your age!</h3>";
                }

                }       
            ?>
        </div>
        <div id="sidebar3" class="sidebars"> </div>

    </body>
</html>