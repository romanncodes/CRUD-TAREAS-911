cargaTareas();

async function cargaTareas() {
  try {
    const res = await fetch(
      "http://localhost/CRUD-PHP-911/controllers/Tareas.php"
    );
    const data = await res.json();
    pintaTabla(data);

    console.log(data);
  } catch (error) {
    console.log(error);
  }
}

function pintaTabla(data) {
  var tareas = document.getElementById("tareas");
  var tabla = `
            <table>
                <tr>
                   <th> Nombre </th>
                   <th>Descripcion</th>
                </tr>   
        `;
  data.forEach((item) => {
    tabla += `
                <tr>
                    <td>${item.nombre}</td>
                    <td>${item.descripcion}</td>
                </tr>    
            `;
  });
  tabla += "</table>";
  tareas.innerHTML = tabla;
}

document.getElementById("bt_guardar").addEventListener("click", (e) => {
  e.preventDefault();
  insertarTarea();
});

async function insertarTarea() {
  try {
    const URL = "http://localhost/CRUD-PHP-911/controllers/ControlInsert.php";
    const res = await fetch(URL, {
      method: "POST",
      body: new FormData(document.getElementById("form")),
    });
    const data = await res.json();
    M.toast({ html: data.msg });
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}
