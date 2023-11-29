/*Se crea una variable "swiper" que se instancia en este objeto
Swiper, y a este objeto se le asigna la clase ".swiper-container."*/
var swiper = new Swiper('.swiper-container', {
	/*Botones de navegacion "next" y "prev"*/
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	/*Espaciado entre los productos*/ 
	slidesPerView: 1,
	spaceBetween: 10,
	/*Espaciado entre los productos*/ 
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  /*Esta seccion del codigo indica como se va a mostrar el carrusel de productos,
  por ejemplo:
  Si la pantalla desde donde se interactua con la pagina es de 620
  se mostrara solo un producto en el area de visualizacion, y si estamos hablando 
  de una pantalla de 1240 se mostraran 4 productos en el area visual. */ 
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
    });
/*Se crea una variable "swiper" que se instancia en este objeto
Swiper, y a este objeto se le asigna la clase ".swiper-container."*/