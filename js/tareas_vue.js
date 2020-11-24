new Vue({
  el: "#main",
  data: {
    titulo: "Hola Vue",
    nombre: "",
    descripcion: "",
    tareas: [],
  },
  methods: {
    saludar: function () {
      alert("Hola vue");
    },
    guardar: async function () {
      var url = "http://localhost/CRUD-PHP-911/controllers/ControlInsert.php";
      form = new FormData();
      form.append("nombre", this.nombre);
      form.append("descripcion", this.descripcion);
      try {
        const res = await fetch(url, {
          method: "post",
          body: form,
        });
        const data = await res.json();
        alert(data.msg);
        this.cargar();
        console.log(data);
      } catch (error) {
        console.log(error);
      }
    },
    cargar: async function () {
      var url = "http://localhost/CRUD-PHP-911/controllers/Tareas.php";

      try {
        const res = await fetch(url);
        const data = await res.json();
        this.tareas = data;
        console.log(data);
      } catch (error) {
        console.log(error);
      }
    },
    detalle: function (tarea) {
      alert("id:" + tarea.id + " desc:" + tarea.descripcion);
    },
  },
  created() {
    this.cargar();
  },
});
