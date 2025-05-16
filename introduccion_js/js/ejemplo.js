const content = document.getElementById('content');

const consultarProductos = () => {
  fetch("https://api.escuelajs.co/api/v1/products")
    .then((response) => {
      if (response.status != 200) {
        throw "Error";
      }
      return response.json();
    })
    .then((data) => {
      for(let item of data){
        const div = document.createElement('div');
        div.textContent = item.title;
        content.appendChild(div);
      }
    })
    .catch((e) => {
      alert("Error al consumir el servcio");
    })
    .finally(() => {
      console.log("Fin del servicio");
    });
};
consultarProductos();

const consultarProductosDos = async () => {
  try {
    const response = await fetch("http://127.0.0.1:8000/api/personas");
    // if (response.status != 200) {
    //   throw "Error";
    // }
    const data = await response.json();
    console.log(data);
  } catch (error) {
    alert("Error al consumir el servcio 2");
  }
  console.log("Fin del servicio");
};
consultarProductosDos();

const crearProducto = () => {
  fetch("https://api.escuelajs.co/api/v1/products", {
    method: "post",
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      title: "New Productssss",
      price: 10,
      description: "A description",
      categoryId: 1,
      images: ["https://placehold.co/600x400"],
    }),
  })
    .then((resp) => resp.json())
    .then((data) => console.log(data));
};
// crearProducto();
