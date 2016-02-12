<div class="row">
    <div class="col s12">
        <h5>Todos los usuarios</h5>
        <table class="striped white">
            <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php route('users/edit/','Edit', $user->id, ['class' => 'btn']) ?> -
                        <?php route('users/destroy/', 'Delete', $user->id, ['target' => "_blank", "class" => "btn red"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

