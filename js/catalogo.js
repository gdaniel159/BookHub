fetch('http://127.0.0.1:5000/libros') 

.then( response => {

    console.log(response);

    response.json().then(data => {

        console.log(data);

    });

})