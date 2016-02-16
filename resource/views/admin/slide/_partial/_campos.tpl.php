<label for="title">Titulo</label>
<input type="text" name="title" required value="<?php if(isset($slide)){echo $slide->titulo;} ?>">
<label for="subtitle">Sub Titulo</label>
<input type="text" name="subtitle" value="<?php if(isset($slide)){echo $slide->subtitulo;} ?>">
