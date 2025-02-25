<?php
// Solicitar dados ao usuário (nome, idade e hobbies)
echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));

echo "Digite seus 3 hobbies (separados por vírgula): ";
$hobbies_input = trim(fgets(STDIN));
$hobbies = explode(",", $hobbies_input);

// Armazenando as informações em um array associativo
$usuario = array(
    "nome" => $nome,
    "idade" => $idade,
    "hobbies" => $hobbies
);

// Exibindo se é maior ou menor de idade
if ($usuario["idade"] < 18) {
    echo "Menor de idade\n";
} else {
    echo "Maior de idade\n";
}

// Função personalizada para exibir uma mensagem
function exibirMensagem($nome, $idade) {
    return "Olá, $nome! Você tem $idade anos.";
}

// Chamando a função e exibindo a mensagem
echo exibirMensagem($usuario["nome"], $usuario["idade"]) . "\n";

// Exibindo os hobbies usando um foreach
echo "Seus hobbies são:\n";
foreach ($usuario["hobbies"] as $hobby) {
    echo "- " . trim($hobby) . "\n";
}
?>
