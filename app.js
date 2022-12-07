fetch('listar.php')
.then(res => res.json())
.then(data => {

    // console.log(data);
    let str = '';
    data.map(item => {
        str += `
            <tr>
                <td>${item.codigodatos}</td>
                <td>${item.fecha}</td>
                <td>${item.hora}</td>
                <td>${item.tipo}</td>
                <td>${item.hermanos}</td>
                <td>${item.niños}</td>
                <td>${item.visitas}</td>
                <td>${item.total_hermanos}</td>
                
            </tr>
        `
    });

    document.getElementById('table_data').innerHTML = str;


});