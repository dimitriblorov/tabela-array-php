<?php
$array = [
    'nome' => 'Dimitri',
    'idade' => 28,
    'empresa' => 'home',
    'cor' => 'vermelho',
    'profissão' => 'dev web'
];
?>
<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>