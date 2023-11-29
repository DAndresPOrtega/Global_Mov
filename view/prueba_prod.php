<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="product-details" class="product-details"></div>
    <h1>HOLA ESTA ES LA PAGINA PARA MOSTRAR DATOS DEL PRODUCTO:</h1>
<script src="../assets/js/producto.js"></script>
<script>
  // Obtener el ID del producto de la URL
  const urlParams = new URLSearchParams(window.location.search);
  const productId = urlParams.get('id');

  // Buscar el producto con el ID correspondiente
  const product = products.find(p => p.id == productId);

  // Mostrar los detalles del producto si se encuentra
  if (product) {
    const productDetailsContainer = document.getElementById('product-details');
    const productDetailsHTML = `
      <h2>${product.name}</h2>
      <img src="${product.image}" alt="${product.name}" style="max-width: 100%">
      <p><strong>Precio:</strong> ${product.price}</p>
      <p><strong>Descripción:</strong> ${product.description}</p>
    `;
    productDetailsContainer.innerHTML = productDetailsHTML;
  } else {
    // Mostrar un mensaje si el producto no se encuentra
    const productDetailsContainer = document.getElementById('product-details');
    productDetailsContainer.innerHTML = '<p>Producto no encontrado</p>';
  }
</script>
</body>
</html>