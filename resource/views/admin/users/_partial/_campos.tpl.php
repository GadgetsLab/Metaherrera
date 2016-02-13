<label for="email">Email</label>
<input type="email" name="email" required value="<?php if(isset($user)){echo $user->email;}?>"/>
<label for="name">Nombre</label>
<input type="text" name="name" required  value="<?php if(isset($user)){echo $user->name;} ?>"/>
<label for="password">Password</label>
<input type="password" name="password" />
<select name="rol" id="rol" class="browser-default">
    <option value="1">Admin</option>
    <option value="2">Moderador</option>
    <option value="3">Usuario</option>
</select>