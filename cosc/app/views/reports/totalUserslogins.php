
<?php require_once '../app/views/templates/header.php'?>
<h1> Users Logins</h1>
<table class='table table-striped table-condensed'>
    <tr>
         <th>/username</th>
        <th>logins</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['username']?></td>
            <td><?=$items['logintype']?></td>
            
        </tr>
    <?php }?>
</table>
<?php require_once '../app/views/templates/footer.php' ?>