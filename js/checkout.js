
let listaCarrito =  JSON.parse(localStorage.getItem('carrito'))
    

function cargarCarrito(){
    let productos = listaCarrito.toString().split(",");
    let table = document.getElementById("tablacarrito")
    if(productos.length > 0){
        for(let i=0;i<productos.length;i++){
            for(let f=0;f<productosRopa.length;f++){
                if(productos[i]==productosRopa[f].id){

                    let nuevaFila = document.createElement("tr");
                    nuevaFila.id = "linea" + i;

                    let celda1 = document.createElement("td");
                    celda1.textContent = productosRopa[f].id;
                    nuevaFila.appendChild(celda1);

                    let celda2 = document.createElement("td");
                    celda2.textContent = productosRopa[f].nombre;
                    nuevaFila.appendChild(celda2);

                    let celda3 = document.createElement("td");
                    celda3.textContent = productosRopa[f].precio;
                    nuevaFila.appendChild(celda3);

                    let celda4 = document.createElement("td");
                    celda4.textContent = "Eliminar";
                    celda4.addEventListener("click", function() {
                        eliminarCarrito(i);    
                    });
                    nuevaFila.appendChild(celda4);

                    // Paso 4: Agregar la fila a la tabla
                    table.appendChild(nuevaFila);
                }

            }
        }
    }
}

cargarCarrito()


function eliminarCarrito(i){
    listaCarrito.splice(i, 1);
    document.getElementById("linea" + i).remove();
}