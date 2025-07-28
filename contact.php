<?php

$contacts =[];

function addContact(array &$contacts, string $name , string $email , $phon){
    $contacts[] = ["name"=>$name, "email"=>$email , "phon"=>$phon] ;

}

function displayContact(array $contacts){
    if(empty($contacts)){
        echo "No Data Available";
    }
    else{
        foreach($contacts as $contact){
            echo "
            name: {$contact['name']},
            email: {$contact['email']},
            phon : {$contact['phon']} \n,

            ";
        }
    }
}

while(true){
    echo "Contact Management App :\n1.Add Contact : \n2.View Contact : \n3.Exit \n";
    $choice = (int) readline("Choice an option : ");


if($choice === 1){

    $name = readline("Enter your name: ");
    $email = readline("Enter you email: ");
    $phone = readline("Enter your phone number: ");

    addContact($contacts, $name , $email, $phone);

    echo "Name added to contact $name \n";
    echo "Email added to contact $email \n";
    echo "Phone number added to contact $phone \n";
}
elseif($choice === 2){
    displayContact($contacts);
}
elseif($choice === 3){
    echo "Exiting..";
    break;
}
else{
    echo "Please choice the correct one  ";
}
}