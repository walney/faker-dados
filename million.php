<?php
ini_set('max_execution_time', '-1');// Ilimitados
ini_set('max_input_time', 120);// s
ini_set('max_input_nesting_level', 64);//s
ini_set('memory_limit', '-1');//Ilimitada?

header("Content-Type: text/html;  charset=UTF-8",true);
    
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
//$faker = Faker\Factory::create();
$faker = Faker\Factory::create('pt_BR');

$cliente = "CREATE TABLE clientes (
    id int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    nascimento date,
    cpf varchar(15)
);\n\n";

$cliente .= "INSERT INTO clientes (nome, email, nascimento, cpf) VALUES \n";

for ($i=0; $i < 1000000; $i++) {
    $nome = addslashes($faker->name);
    $email = $faker->email;
    $nascimento = $faker->date;
    $cpf = $faker->numberBetween($min = 10000000000, $max = 99999999999);

    if($i<999999){
        $cliente .= "('$nome', '$email', '$nascimento', '$cpf'),\n";
    }else{
        $cliente .= "('$nome', '$email', '$nascimento', '$cpf');\n";
    }
}

$fp = fopen("clientes.sql", "w");
$escreve = fwrite($fp, $cliente);
fclose($fp);

print 'Arquivo criado';
