<?php

  //essa lista pode vir de um banco de dados
  $listaCidades = [
    1 => "Itapevi",
    2 => "Jandira",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Santana de Parnaíba",
    6 => "Carapicuiba",
    7 => "São Paulo",
    8 => "Cotia",
  ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SELECT - COMBO-BOX - DROPDOWN</title>
</head>

<body>
  <form method="POST">
    <label for="cidades">Cidade</label>
    <select id="cidades" autofocus name="cidades" required>
      <option value="">SELECIONE</option>
      <?php
        foreach($listaCidades as $chave => $cidade) {
      ?>
          <option value="<?= $chave ?>"><?= $cidade ?></option>
      <?php
        }
      ?>
    </select>
    <button>Enviar</button>
  </form>
</body>

</html>