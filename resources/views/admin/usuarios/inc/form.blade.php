
    <div class='form-group'>
        <label for='Nombre'>Nombre</label>
        <input required class='form-control' type="text" name="name" id="Nombre" value='{{$user->name}}'>
        <small>Ejemplo: Gustavo Alejandro</small>

    </div>

    <div class='form-group'>
        <label for='Apellido'>Apellido</label>
        <input required class='form-control' type="text" name="lastname" id="Apellido" value='{{$user->name}}' >
        <small>Ejemplo: Santaella Machado</small>

    </div>
    <div class='form-group'>
        <label for='Correo'>Correo electronico</label>
        <input required class='form-control' type="email" name="email" id="Correo" value='{{$user->email}}'>
        <small>Ejemplo: funnywebs@gmail.com</small>

    </div>
    <div class='form-group d-flex flex-column'>

       @foreach($roles as $name => $data)
       <div>
        <input type='checkbox'{{$data['check'] ?'checked' : ''}} name='roles[]' id='role-{{$data["id"]}}' value='{{$data["id"]}}' >
        <label for='role-{{$data["id"]}}'>{{$name}}</label>
       </div>
       @endforeach
    </div>

   
    {{-- <div class='form-group'>
        <label for='file'>Seleccione una foto</label>
        <input required  type="file" name="Foto" id="Foto" >
        <small>Formato: .jpg, .jpeg, .png</small>

    </div> --}}