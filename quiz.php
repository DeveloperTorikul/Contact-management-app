<?php
$questions = [
    ["questions" => "What is 2+4", "correct"=> "6"],
    ["questions" => "What is capital of bangladesh", "correct" => "dhaka"],
    ["questions" => "Who wrote agnibina", "correct"=> "nazrul"],
];

$answers = [];

foreach($questions as $index=>$question){
    echo ($index +1).".".$question["questions"]."\n";
    $answers[] = trim(readline("your answer: "));
}

function evaluateQuiz(array $questions, array $answers){
    $score = 0;
    foreach($questions as $index=>$question){

        echo "User answer : ".$answers[$index]."\n";
        echo "Correct answer : ".$question["correct"]."\n";

        if($answers[$index] === $question["correct"]){
            $score++;
        }
    }
    return $score;
}

$myScore = evaluateQuiz($questions,$answers);

echo "\nYour score is $myScore out of"." ".count($questions)."\n";

if($myScore === count($questions)){
    echo "Excellent Job!\n";
}
elseif($myScore >= 1){
    echo "Good Effort! \n";
}
else{
    echo "Your result is fail, try again latter!\n";
}