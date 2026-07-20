<table>
<thead>
    <th>Id</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Fone</th>
    <th>Nacionalidade</th>
</thead>
<tbody>
<?php
foreach($dados as $autor) {
echo '
    <tr>
        <td>   '.$autor["id_autor"].'</td>
        <td> '.$autor["nome"].' </td>
        <td>'.$autor["email"].'</td>
        <td>'.$autor["fone"].'</td>
            <td>'.$autor["nacionalidade"].'</td>
        <td class="acoes">
            <i class="bi bi-eye"></i>
          <a href="?classe=autor&acao=buscar&id='.$autor["id_autor"].'"> Editar </a>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </td>
    </tr>
';
}
?>
</tbody>

