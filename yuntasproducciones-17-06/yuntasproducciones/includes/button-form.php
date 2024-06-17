<div class="contenedor-form" >
    <div class="registration-form" id="form" target="_blank" rel="noopener">
        <p class="text-succes text-center"></p>
        <form id="formMessage" action method="post">
            <div class="btn-cerrar">
            <button id="btn-cerrar" onclick="cerrar()">
            <i class="ri-close-line"></i>
            </button>
            </div>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" placeholder="Ingresar Nombre Completo" name="name" id="name">
                <p></p>
            </div>
            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input type="text" class="form-control" placeholder="Ingresar Telefono Personal" name="phone" id="phone">
                <p></p>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="text" class="form-control" placeholder="Ingresar Correo" name="email" id="email">
                <p></p>
            </div>
            <button type="submit" class="go-button" name="submit">Enviar</button>
        </form>
    </div>
    <div class="btn-form" target="_blank" rel="noopener">
        <button id="btn-form"  aria-label="button-form" onclick="mostrar()">
        <i class="ri-message-2-line"></i>
        </button>
    </div>
</div>
<script>
    function mostrar(){
        document.getElementById("form").style.display="block";
    }
    function cerrar(){
        document.getElementById("form").style.display="none";
        event.preventDefault();
    }
</script>