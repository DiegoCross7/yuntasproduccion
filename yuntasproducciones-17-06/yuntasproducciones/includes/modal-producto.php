<a href="#openModal">
    <button class="btn-cotizar">Cotizar</button>
</a>

<div id="openModal" class="modalDialog">
    <div class="modal-dialog">
        <div class="title-modal">
            <a href="#close" title="Close" class="close">X</a>
            <h1>Patalla LED Vertical para Interiores</h1>
        </div>
        <div class="body-modal">
            <form method="post">
                <input type="hidden" name="producto" value="Sellador de Botellas">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" required>
                <label for="celular">Celular:</label>
                <input type="text" name="celular" id="celular" required>
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" required></textarea>
                <input type="submit" value="Enviar cotización">
            </form>
        </div>
    </div>
</div>

<style>
    .swal2-success-circular-line-left,
    .swal2-success-circular-line-right,
    .swal2-success-fix {
        background-color: transparent !important;
    }

    .swal2-title {
        height: 100%;
        font-size: 16px !important;
        display: flex !important;
        align-items: center;
    }
</style>

<script>
    // Se envía el formulario con jQuery
    $("form").on("submit", function (e) {
        e.preventDefault();
        window.location.href = "producto-detalle.php#close";
        $.ajax({
            url: "includes/send-whatsapp.php",
            type: "POST",
            data: $(this).serialize(),
            success: function () {
                Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000
                }).fire({
                    icon: 'success',
                    title: 'Se ha enviado correctamente.',
                    background: '#00975bf5',
                    color: '#fff',
                    width: '378px'
                });
            },
            error: function () {
                console.log("No se pudo enviar el mensaje");
                Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000
                }).fire({
                    icon: 'error',
                    title: 'Se produjo un error al enviar.',
                    background: '#b00000f5',
                    color: '#fff',
                    width: '370px'
                });
            }
        });
    });
</script>