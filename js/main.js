let subMenu = document.getElementById('SubMenu');

function toggleMenu() {

    subMenu.classList.toggle('open-menu');

}

// Sweet Alert

function openCartPopup(bookId) {

    Swal.fire({

        title: 'Agregar al carrito',

        html: `
            <label for="quantity-${bookId}">Cantidad:</label>
            <input type="number" id="quantity-${bookId}" class="form-control">
        `,

        showCancelButton: true,
        confirmButtonText: 'Agregar',
        cancelButtonText: 'Cancelar',

        preConfirm: () => {

            const quantity = parseInt(document.getElementById(`quantity-${bookId}`).value);

            if (!isNaN(quantity) && quantity > 0) {

                // Realizar la solicitud AJAX para enviar los datos al archivo add_cart.php

                $.ajax({

                    type: "POST",

                    url: "../model/add_cart.php",

                    data: { bookId: bookId, quantity: quantity },

                    success: function(response) {

                        Swal.fire({

                            icon: 'success',
                            title: 'Producto agregado al carrito',
                            text: 'Se ha agregado el producto al carrito de compras.',

                        }).then((result) => {

                            if (result.isConfirmed) {

                                window.location.href = "../templates/carrito_de_compras.php";

                            }
                            
                        });
                    }

                });

            } else {

                Swal.showValidationMessage('Por favor, ingresa una cantidad válida');

            }

        }

    });
}

// Eliminacion del carrito

// $(document).ready(function() {

//     $('#btn-descargar-boleta').click(function(e) {
//     e.preventDefault();

//     var encoded_user_data = '<?php echo $query_string; ?>';

//     var user_data = JSON.parse(decodeURIComponent(encoded_user_data));

//     var datosCliente_encoded = encodeURIComponent(JSON.stringify(user_data));

//     var id_cliente_decoded = JSON.parse(decodeURIComponent(datosCliente_encoded));

//     var idCliente = id_cliente_decoded.id_cliente;
    
//     // Realizar la solicitud AJAX para eliminar los registros del carrito
//     $.ajax({
        
//         url: '../model/eliminar_carrito.php',
//         type: 'POST',
//         dataType: 'json',
//         data: {
//         id_cliente: idCliente
//         },
//         success: function(response) {
//         // console.log('Respuesta del servidor:', response);

//         if (response.success) {
//             // Eliminación exitosa, redirigir a la página de carrito vacío o hacer alguna otra acción
//             window.location.href = '../templates/carrito_de_compras.php';
//         } else {
//             // Error al eliminar, mostrar un mensaje de error o hacer alguna otra acción
//             alert('Ocurrió un error al eliminar los productos del carrito.');
//         }
//         },
//         error: function(xhr, status, error) {
//         // console.log('Error en la solicitud AJAX:', error);

//         // Error en la solicitud AJAX, mostrar un mensaje de error o hacer alguna otra acción
//         alert('Ocurrió un error en la solicitud AJAX.');
//         }
//     });
//     });
// });