let btnCambio = document.getElementById('enlaceCambioCreador');
let containerCreador = document.getElementById('registerCreador');
let containerUsuario = document.getElementById('regiseterUsuario');

btnCambio.addEventListener('click',function(){

    let isActive = true;

    containerCreador.style.display = 'block';
    containerUsuario.style.display = 'none';

});