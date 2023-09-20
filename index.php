<?php
$animais = array(
    "Avestruz" => array(1, 2, 3, 4),
    "Águia" => array(5, 6, 7, 8),
    "Burro" => array(9, 10, 11, 12),
    "Borboleta" => array(13, 14, 15, 16),
    "Cachorro" => array(17, 18, 19, 20),
    "Cabra" => array(21, 22, 23, 24),
    "Carneiro" => array(25, 26, 27, 28),
    "Camelo" => array(29, 30, 31, 32),
    "Cobra" => array(33, 34, 35, 36),
    "Coelho" => array(37, 38, 39, 40),
    "Cavalo" => array(41, 42, 43, 44),
    "Elefante" => array(45, 46, 47, 48),
    "Galo" => array(49, 50, 51, 52),
    "Gato" => array(53, 54, 55, 56),
    "Jacaré" => array(57, 58, 59,60),
    "Leão" => array(61 ,62 ,63 ,64),
    "Macaco" => array(65 ,66 ,67 ,68),
    "Porco" => array(69 ,70 ,71 ,72),
    "Pavão" => array(73 ,74 ,75 ,76),
    "Peru" => array(77 ,78 ,79 ,80),
    "Touro" => array(81 ,82 ,83 ,84),
    "Tigre" => array(85 ,86 ,87 ,88),
    "Urso" => array(89 ,90 ,91 ,92),
    "Veado" => array(93 ,94 ,95 ,96),
    "Vaca" => array(97 ,98 ,99 ,00)
);

if (isset($_POST['entrada'])) {
    $entrada = $_POST['entrada'];
    
    if (is_numeric($entrada)) {
        $entrada = intval($entrada);
        if ($entrada >=0 && $entrada <=99) {
            foreach ($animais as $animal=>$dezenas) {
                if (in_array($entrada,$dezenas)) {
                    echo "<h1>O animal correspondente à dezena $entrada é: $animal</h1>";
                    break;
                }
            }
        } else {
            echo "<h1>Por favor digite um número entre 00 e 99.</h1>";
        }
        
    } else {
        $entrada = ucfirst(strtolower($entrada));
        if (array_key_exists($entrada,$animais)) {
            $dezenas = implode(", ",$animais[$entrada]);
            echo "<h1>As dezenas correspondentes ao animal $entrada são: $dezenas</h1>";
        } else {
            echo "<h1>Por favor digite o nome de um animal válido.</h1>";
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">


<style>
    /* Inicio do codigo CSS */

body {
    /* Adicione o caminho correto para a imagem de background */
    background-image: url('https://live.staticflickr.com/65535/53104987224_86110ec08a_b.jpg');
    /* Defina o modo como a imagem se repetirá no fundo */
    background-repeat: no-repeat;
    /* Ajuste a imagem para preencher todo o background */
    background-size: cover;
}
/* Estilo para o cabeçalho */
h1 {
    color: #333;
}

/* Estilo para o formulário */
form {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin: 0 auto;
}

label {
    margin-bottom: 5px;
}

input[type="text"] {
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #45a049;
}

/* Estilo para a área de resultado */
.resultado {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
</style>


</head>
<body>

<center><h2>Jogo do Bicho</h2></center>

<form method="post">
<label for="entrada"><center><h2>Digite um número de <strong>00 a 99</strong><br> ou o nome de um animal:</h2></center></label><br>
<input type="text" id="entrada" name="entrada"><br>
<input type="submit" value="Enviar">
</form>

<center><button onclick="window.location.reload();">Retornar</button></center>

<script>
// código JavaScript aqui
const animais = {
    "Avestruz": [1, 2, 3, 4],
    "Águia": [5, 6, 7, 8],
    "Burro": [9, 10, 11, 12],
    "Borboleta": [13, 14, 15, 16],
    "Cachorro": [17, 18, 19, 20],
    "Cabra": [21, 22, 23, 24],
    "Carneiro": [25, 26, 27, 28],
    "Camelo": [29, 30, 31, 32],
    "Cobra": [33, 34, 35, 36],
    "Coelho": [37, 38, 39, 40],
    "Cavalo": [41, 42, 43, 44],
    "Elefante": [45, 46, 47,48],
    "Galo": [49 ,50 ,51 ,52],
    "Gato": [53 ,54 ,55 ,56],
    "Jacaré": [57 ,58 ,59 ,60],
    "Leão": [61 ,62 ,63 ,64],
    "Macaco": [65 ,66 ,67 ,68],
    "Porco": [69 ,70 ,71 ,72],
    "Pavão": [73 ,74 ,75 ,76],
    "Peru": [77 ,78 ,79 ,80],
    "Touro": [81 ,82 ,83 ,84],
    "Tigre": [85 ,86 ,87 ,88],
    "Urso": [89 ,90 ,91 ,92],
    "Veado": [93 ,94 ,95 ,96],
    "Vaca":[97 ,98 ,99 ,00]
};

function processarEntrada() {
    let entrada = document.getElementById("entrada").value;
    
    if (!isNaN(entrada)) {
        entrada = parseInt(entrada);
        if (entrada >=0 && entrada <=99) {
            for (let animal in animais) {
                if (animais[animal].includes(entrada)) {
                    document.getElementById("resultado").innerHTML = `<p>O animal correspondente à dezena ${entrada} é: ${animal}</p>`;
                    break;
                }
            }
        } else {
            document.getElementById("resultado").innerHTML = "<p>Por favor digite um número entre 00 e 99.</p>";
        }
        
    } else {
        entrada = entrada.charAt(0).toUpperCase() + entrada.slice(1).toLowerCase();
        if (animais.hasOwnProperty(entrada)) {
            let dezenas = animais[entrada].join(", ");
            document.getElementById("resultado").innerHTML = `<p>As dezenas correspondentes ao animal ${entrada} são: ${dezenas}</p>`;
        } else {
            document.getElementById("resultado").innerHTML = "<p>Por favor digite o nome de um animal válido.</p>";
        }
        
    }
}

function retornar() {
    document.getElementById("entrada").value = "";
    document.getElementById("resultado").innerHTML = "";
}
</script>

</body>
</html>