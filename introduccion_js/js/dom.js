// document.addEventListener("DOMContentLoaded", () => {
  const titulo = document.getElementById("titulo");

  // console.log(document.getElementById('titulo').textContent);
  // console.log(document.getElementById('titulo').innerText);
  // console.log(document.getElementById('titulo').innerHTML);

  // document.getElementById('titulo').textContent = 'Hola Pepe!!!';
  // document.getElementById('titulo').innerText = 'Hola <i>Ana</i>!!!';
  // document.getElementById('titulo').innerHTML = 'Hola <i>Ana</i>!!!';

  console.log(titulo.textContent);
  console.log(titulo.innerText);
  console.log(titulo.innerHTML);

  titulo.textContent = "Hola Pepe!!!";
  titulo.innerText = "Hola <i>Ana</i>!!!";
  titulo.innerHTML = "Hola <i>Ana</i>!!!";

  titulo.style.color = "#ff0000";
// });
