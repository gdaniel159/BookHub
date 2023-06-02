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