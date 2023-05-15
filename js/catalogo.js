// Constantes pre definidas

const urlApi = 'https://www.googleapis.com/books/v1/volumes?q=';
const KEY = 'AIzaSyCNeDhhgJ6DrAM-yZfB8qya2IcAsKP5rHE';

// Colocamos las URL que deseamos llamar en un array

const urls = [

    // Lista de libros de programacion

    urlApi + 'Programacion+subject:programming&key=' + KEY,

    // Lista de libros de psicologia

    urlApi + 'Psicologia+subject:psychology&key=' + KEY,

    // Lista de libros de ciencia

    urlApi + 'Ciencia+subject:science&key=' + KEY,

]

// Crea una matriz de promesas para cada URL

const promises = urls.map(url => fetch(url));

// Usa Promise.all() para esperar a que todas las promesas se resuelvan

Promise.all(promises)

    .then(response => {

        response.forEach(response => {

            console.log(response);

        })

    })

    .catch (errors => {

        console.error(errors);

    })