new Vue({
  el: "#app",
  data: {
    nombre: "",
    descripcion: "",
    tareas: [],
  },
  methods: {
    guardar: async function () {
      var form = new FormData();
      form.append("nombre", this.nombre);
      form.append("descripcion", this.descripcion);

      try {
        const URL =
          "http://localhost/CRUD-PHP-911/controllers/ControlInsert.php";
        const res = await fetch(URL, {
          method: "POST",
          body: form,
        });
        const data = await res.json();
        M.toast({ html: data.msg, inDuration: 600 });
        this.cargarTareas();
        console.log(data);
      } catch (error) {
        console.log(error);
      }
    },
    cargarTareas: async function () {
      try {
        const res = await fetch(
          "http://localhost/CRUD-PHP-911/controllers/Tareas.php"
        );
        const data = await res.json();
        this.tareas = data;
        console.log(data);
      } catch (error) {
        console.log(error);
      }
    },
  },
  created() {
    this.cargarTareas();
  },
  mounted() {},
});
