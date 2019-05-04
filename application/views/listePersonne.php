<div class="container">
    <table >
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nombre d'enfant</th>
                <th>Nombre d'adulte</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listpersonne as $person)
        { ?>
            <tr>
                <td><?php echo ($person['NOMCLIENT']);?></td>
                <td><?php echo ($person['PRENOMCLIENT']);?></td>
                <td><?php echo ($person['NOMBREENFANT']);?></td>
                <td class="center"><?php echo ($person['NOMBREADULTE']);?></td>
                <td class="center"><?php echo ($person['TELEPHONE']);?></td>
            </tr>
        <?php } ?>
            
        </tbody>
    </table>
</div>