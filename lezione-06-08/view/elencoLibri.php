<table class="table table-striped">

    <thead>
        <tr>
            <th>titolo</th>
            <th>autori</th>
            <th>prezzo</th>
            <th>copie</th>
        </tr>

    </thead>

    <tbody>
        <?php foreach ($elencoLibri as $libro) : ?>
        
        <tr>
            <td><?= $libro->titolo ?></td>
            <td><?= $libro->autori ?></td>
            <td><?= $libro->prezzo ?></td>
            <td><?= $libro->copie ?></td>
        </tr>
        
        <?php endforeach; ?>
    </tbody>
        
</table>