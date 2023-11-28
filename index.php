<?php
    function gerarNumerosMegaSena() {
        $numeros = [];
    
        // Gerar seis números únicos
        while (count($numeros) < 6) {
            $numeroAleatorio = rand(1, 60);
    
            // Verificar se o número já foi escolhido
            if (!in_array($numeroAleatorio, $numeros)) {
                $numeros[] = $numeroAleatorio;
            }
        }
    
        // Ordenar os números em ordem crescente
        sort($numeros);
    
        return $numeros;
    }
    
    // Chamar a função para gerar os números
    $megaSenaNumbers = gerarNumerosMegaSena();
    
    // Exibir os números gerados
    echo "Números da Mega Sena: " . implode(', ', $megaSenaNumbers);
?>
