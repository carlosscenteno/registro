document.getElementById('formulario').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('../php/insertar.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('fecha').value = '';//es el id que esta en el formulario//
            document.getElementById('hora').value = '';//es el id que esta en el formulario//
            document.getElementById('tipo').value = '';//es el id que esta en el formulario//
            document.getElementById('hermanos').value = '';//es el id que esta en el formulario//
            document.getElementById('niños').value = '';//es el id que esta en el formulario//
            document.getElementById('visitas').value = '';//es el id que esta en el formulario//
            document.getElementById('total_hermanos').value = '';//es el id que esta en el formulario//
            alert('El usuario se insertó correctamente.');
        } else {
            console.log(data);
        }
    });

});
