//Definición de variables
let contactos = [];
const form = document.forms['contactoForm'];
const table = document.getElementById('contactosTable');
const crearBtn = document.getElementById('crearBtn');

//Definición de métodos
const guardarContacto = () => {
    const contacto = {
        nombre: form['nombre'].value,
        email: form['correo'].value,
        telefono: form['telefono'].value
    };
    contactos.push(contacto);
    visualizarContactos();
};

const visualizarContactos = () => {
    if (contactos.length == 0) {
        return;
    } else {
        // // let rows = '';
        // // for (let index in contactos) {
        // //     const item = contactos[index];
        // //     rows += `<tr>
        // //         <td>${Number(index) + 1}</td>
        // //         <td>${item.nombre}</td>
        // //         <td>${item.email}</td>
        // //         <td>${item.telefono}</td>
        // //     </tr>`;
        // // }
        // const rows = contactos.map((item, index)=>{
        //     return `<tr>
        //          <td>${Number(index) + 1}</td>
        //          <td>${item.nombre}</td>
        //          <td>${item.email}</td>
        //          <td>${item.telefono}</td>
        //      </tr>`;
        // }).join('');
        // const tBody = table.getElementsByTagName('tbody')[0];
        // tBody.innerHTML = rows;

        const tBody = table.getElementsByTagName('tbody')[0];
        tBody.innerHTML = '';
        contactos.map((item, index) => {
            const tr = document.createElement('tr');
            const noTd = document.createElement('td');
            noTd.textContent = Number(index) + 1;
            const nombreTd = document.createElement('td');
            nombreTd.textContent = item.nombre;
            const emailTd = document.createElement('td');
            emailTd.textContent = item.email;
            const telTd = document.createElement('td');
            telTd.textContent = item.telefono;

            tr.appendChild(noTd);
            tr.appendChild(nombreTd);
            tr.appendChild(emailTd);
            tr.appendChild(telTd);

            return tr;
        }).forEach(tr => tBody.appendChild(tr));
    }
}

const nombreKeyUp = () => {
    const val = form['nombre'].value;
    const nombreError = document.getElementById('nombreError');
    if (!val) {
        nombreError.style.display = 'block';
    } else {
        nombreError.style.display = 'none';
    }
}

//Definición de eventos
form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    guardarContacto();
    document.getElementsByClassName('modal')[0]
        .classList.add('cerrarModal');
});

crearBtn.addEventListener('click', () => {
    form.reset();
    document.getElementsByClassName('modal')[0]
        .classList.remove('cerrarModal');
});