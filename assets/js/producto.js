const products = [
  { id: '1', name: 'Redmi Note', price: '$999', desc: '25%', image: '../assets/img/cel4.png', desc: 'Hola buenas este es mi producto' },
  { id: '2', name: 'MOTOROLA G71 128GB VERDE', price: '$799', desc: '25%', image: '../assets/img/cel2.png' },
  { id: '3', name: 'Galaxy A54 5G 256GB', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },
  { id: '4', name: 'MOTOROLA G71 128GB VERDE', price: '$799', desc: '25%', image: '../assets/img/cel4.png' },
  { id: '5', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel2.png' },
  { id: '6', name: 'Galaxy A54 5G 256GB', price: '$799', desc: '25%', image: '../assets/img/cel4.png' },
  { id: '7', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },
  { id: '8', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },
  { id: '9', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },
  { id: '10', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },
  { id: '11', name: 'Redmi Note 10', price: '$799', desc: '25%', image: '../assets/img/cel3.jpg' },





  // Agrega más productos según sea necesario
];

const itemsPerPage = 8;
let currentPage = 1;

function displayProducts(page) {
  const gallery = document.getElementById('gallery');
  gallery.innerHTML = '';

  const startIndex = (page - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  for (let i = startIndex; i < endIndex && i < products.length; i++) {
    const product = products[i];
    const productElement = document.createElement('div');
    productElement.className = 'item';
    productElement.innerHTML = `
    <img src="${product.image}" alt="${product.name}" style="max-width: 100%">
    <h3 
        style="color:black; font-size:20px; font-family: 'Assistant', sans-serif;">
            ${product.name}
    </h3>
    <p
        style="color:black; font-size:20px; font-family: 'Assistant', sans-serif;">
            ${product.price}
    </p>

    <p
        style="color:black; font-size:15px; font-family: 'Assistant', sans-serif;">
            ${product.desc}
    </p>

    <a  style="
        background-color: rgb(44, 44, 114);
        padding: 10px;
        text-decoration: none;
        font-size: 15px;
        color: white;
        width:100px;
        height: 50px;
        border-radius: 10px;" 
        href="producto.php?nombre=${product.name}">
            Ver producto
    </a>`;
    // Agregar un evento de clic para redirigir a la página de detalles
    productElement.addEventListener('click', () => {
      window.location.href = `producto.php?id=${product.id}`;
    });
    gallery.appendChild(productElement);
  }
}

function displayPagination() {
  const totalPages = Math.ceil(products.length / itemsPerPage);
  const pagination = document.getElementById('pagination');
  pagination.innerHTML = '';

  // Botón "Anterior"
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

  // Botones de páginas
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

  // Botón "Siguiente"
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
