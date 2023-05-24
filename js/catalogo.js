fetch('http://127.0.0.1:5000/libros')
.then(response => response.json())
.then(data => {

    // Aqui vamos a pintar la API en nuestra app
    console.log(data);

    const bookContainer = document.getElementById('bookContainer');

    data.forEach(book => {

        // Crear la estructura de la tarjeta

        const card = document.createElement('div');
        card.className = 'card';
        card.style = 'border:1px solid #000; margin:10px 10px;'
        card.style.width = '230px';

        // Crear la imagen de la portada

        const image = document.createElement('img');
        image.src = book.portada;
        image.className = 'card-img-top';
        // image.alt = 'Portada del libro'; 
        image.width = '400';
        image.height = '320';
        image.style.backgroundColor = '#ccc';
        card.appendChild(image);

        // Crear el cuerpo de la tarjeta

        const cardBody = document.createElement('div');
        cardBody.className = 'card-body';

        // Crear el título del libro

        const title = document.createElement('h5');
        title.className = 'card-title productName';
        title.textContent = book.titulo;
        cardBody.appendChild(title);

        // Crear la sinopsis del libro

        const sinopsis = document.createElement('p');
        sinopsis.className = 'card-text description';
        sinopsis.textContent = book.sinopsis;
        cardBody.appendChild(sinopsis);

        // Agregar el cuerpo de la tarjeta a la tarjeta

        card.appendChild(cardBody);

        // Agregar la tarjeta al contenedor de libros

        bookContainer.appendChild(card);

    });

})
.catch(error => {

    const message = document.getElementById('message');

    const alert = document.createElement('div');

    alert.className = 'alert alert-warning alert-dismissible fade show';
    alert.setAttribute('role', 'alert');

    const messageText = 'No se pudo acceder a los datos del proveedor, por favor espere ';

    // Creamos un span para ponerlo en el alert

    const span = document.createElement('span');

    span.innerHTML = messageText;

    const button = document.createElement('button');

    button.className = 'btn-close';
    button.type = 'button';
    button.setAttribute('data-bs-dismiss', 'alert');
    button.setAttribute('aria-label', 'Close');

    // Agregar el boton al alert

    alert.appendChild(span);
    alert.appendChild(button);

    // Agregar el alert al message

    message.appendChild(alert);

    // console.log('Error: ', error);

});