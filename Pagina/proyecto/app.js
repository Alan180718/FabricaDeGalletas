document.getElementById('formulario').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('almacen.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('txt_ingrediente').value = '';
            document.getElementById('int_cantidad').value = '';
            alert('El ingrediente se insertó correctamente.');
        } else {
            console.log(data);
        }
    });

});