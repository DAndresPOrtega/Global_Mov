const products = [
  { id: 1, name: 'Redmi Note', price: '$999', image: '../assets/img/cel4.png', desc: 'Hola buenas este es mi producto' },
  { id: 2, name: 'MOTOROLA G71 128GB VERDE', price: '$799', image: '../assets/img/cel2.png' },
  { id: 3,name: 'Galaxy A54 5G 256GB', price: '$799', image: '../assets/img/cel3.jpg' },
  { id: 4,name: 'MOTOROLA G71 128GB VERDE', price: '$799', image: '../assets/img/cel4.png' },
  { id: 5, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel2.png' },
  { id: 6, name: 'Galaxy A54 5G 256GB', price: '$799', image: '../assets/img/cel4.png' },
  { id: 7, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel3.jpg' },
  { id: 8, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel3.jpg' },
  { id: 9, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel3.jpg' },
  { id: 10, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel3.jpg' },
  { id: 11, name: 'Redmi Note 10', price: '$799', image: '../assets/img/cel3.jpg' },
    // Agrega más productos según sea necesario
  ];
  
  const itemsPerPage = 4;
  let currentPage = 1;
  
  function displayProducts(page) {
    const gallery = document.getElementById('gallery');
    gallery.innerHTML = '';
  
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
  
    for (let i = startIndex; i < endIndex && i < products.length; i++) {
      const product = products[i];
      const productElement = document.createElement('div');
      productElement.className = 'product';
      productElement.innerHTML = `
        <img src="${product.image}" alt="${product.name}" style="max-width: 100%">
        <h3>${product.name}</h3>
        <p>${product.price}</p>
      `;
      gallery.appendChild(productElement);
    }
  }
  
  function displayPagination() {
    const totalPages = Math.ceil(products.length / itemsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
  
    const prevBtn = document.createElement('button');
    prevBtn.textContent = 'Anterior';
    prevBtn.addEventListener('click', () => {
      if (currentPage > 1) {
        currentPage--;
        displayProducts(currentPage);
        displayPagination();
      }
    });
    pagination.appendChild(prevBtn);
  
    for (let i = 1; i <= totalPages; i++) {
      const pageButton = document.createElement('button');
      pageButton.textContent = i;
  
      // Agregar la clase 'active' al botón de la página actual
      if (i === currentPage) {
        pageButton.classList.add('active');
      }
  
      pageButton.addEventListener('click', () => {
        currentPage = i;
        displayProducts(currentPage);
        displayPagination();
      });
      pagination.appendChild(pageButton);
    }
  
    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Siguiente';
    nextBtn.addEventListener('click', () => {
      if (currentPage < totalPages) {
        currentPage++;
        displayProducts(currentPage);
        displayPagination();
      }
    });
    pagination.appendChild(nextBtn);
  }
  
  displayProducts(currentPage);
  displayPagination();
  