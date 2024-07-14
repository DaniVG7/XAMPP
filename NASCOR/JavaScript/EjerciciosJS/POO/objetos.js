class Persona {
  // Creamos una clase persona para definir las propiedades que tendra cada objeto persona.
  constructor(nombre, apellido1, apellido2, sexo) {
    this.nombre = nombre;
    this.apellido1 = apellido1;
    this.apellido2 = apellido2;
    this.sexo = sexo;
  }
}
class Coche {
  constructor(marca, modelo, año) {
    this.marca = marca;
    this.modelo = modelo;
    this.año = año;
  }
}

function añadirPersona() {
  nombre = document.getElementById("nombre").value;
  primerApellido = document.getElementById("ap1").value;
  segundoApellido = document.getElementById("ap2").value;
  sexo = document.getElementById("sexo").value;
  //Recuperar el array inexistente para guardarlo en el local storage
  let personas = JSON.parse(localStorage.getItem("personas"));
  if (personas === null) {
    //hacemos la condicion ya que como no existirá el array nos dirá que es null y creará el array
    personas = new Array();
  }
  personas.push(new Persona(nombre, primerApellido, segundoApellido, sexo)); //Hacemos que cree un elemento en el array con cada objeto
  // text = "";
  // for (i = 0; i < personas.length; i++) {
  //   text += personas[i].nombre + " " + personas[i].apellido1 + "<br>";El for y la variable text es solamente en el caso de que  queramos escribir el resultado en pantalla.
  // }
  //guardar en el navegador el array de personas
  let personasJSON = JSON.stringify(personas);
  localStorage.setItem("personas", personasJSON);
}

//hacer algo parecido con coches.

function añadirCoche() {
  marca = document.getElementById("marca").value;
  modelo = document.getElementById("modelo").value;
  año = document.getElementById("añoFabricacion").value;
  //Recuperar el array guardado en el local storage
  let coches = JSON.parse(localStorage.getItem("coches"));
  if (coches === null) {
    coches = new Array();
  }
  coches.push(new Coche(marca, modelo, año));
  //text = "";
  //for (i = 0; i < coches.length; i++) {
  //text += coches[i].nombre + " " + coches[i].apellido1 + "<br>";  El for y la variable text es solamente en el caso de que queramos escribir el resultado en pantalla.
  //}
    //guardar en el navegador el array de coches
  let cochesJSON = JSON.stringify(coches);
  localStorage.setItem("coches", cochesJSON);
  añadirPersona();

}

