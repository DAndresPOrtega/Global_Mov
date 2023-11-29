/*Esta es una constante "main_img" que guarda la selección del elemento 
que tenga como clase "main_img"*/
    const main_img = document.querySelector('.main_img')
/*Esta es una constante "main_img" que guarda la selección del elemento 
que tenga como clase "main_img"*/

/*Esta es una constante "thumbnail" que guarda la selección de todos los elementos 
que tengan la clase thumbnail*/
    const thumbnails = document.querySelectorAll('.thumbnail')
/*Esta es una constante "thumbnail" que guarda la selección de todos los elementos 
que tengan la clase thumbnail*/

/*Este ciclo forEach ejecutará una función por cada uno de los elementos
que tengan la clase thumbail*/
thumbnails.forEach(/*Esta variable thumb representa a todos los elementos con la clase thumbnails->*/thumb => {

    /*Se llama a thumb y se le dice que ejecute una función que se ejecutara cada vez que el usuario haga "click"*/
    thumb.addEventListener('click', function(){
    /*Se llama a thumb y se le dice que ejecute una función que se ejecutara cada vez que el usuario haga "click"*/
        
        /*Esta es una constante “active” que guarda la selección de todos los elementos 
        que tengan la clase active*/
        const active = document.querySelector('.active')
        /*Esta es una constante “active” que guarda la selección de todos los elementos 
        que tengan la clase active
*/

        /*Cada vez que se hace click sobre una imagen se crea una nueva selección de otro elemento, por lo que se remueve la clase
        active del elemento*/
        active.classList.remove('active')
        /*Cada vez que se hace click sobre una imagen se crea una nueva selección de otro elemento, por lo que se remueve la clase
        active del elemento*/        
        
        /*Y se le asigna la clase active a otro elemento "thumb"*/
        thumb.classList.add('active')
        /*Y se le asigna la clase active a otro elemento "thumb"*/

        /*Se cambia la imagen de la clase main_img(Imagen principal) por la imagen del elemento de clase "thumb" seleccionado*/
        main_img.src = thumb.src
        /*Se cambia la imagen de la clase main_img(Imagen principal) por la imagen del elemento de clase "thumb" seleccionado*/
    })
})
/*Este ciclo forEach ejecutará una función por cada uno de los elementos
que tengan la clase thumbail*/