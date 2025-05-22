const divContainer = document.querySelector("div.container")
let carrito = []


function retornarCardHTML(productosRopa) {

return `
<div class="card">
                <div class="card-image"><img src="${productosRopa.imagen}"</div>
                <div class="card-name">${productosRopa.nombre}</div>
                <div class="card-price">$ ${productosRopa.precio}</div>
                <div class="card-button">
                    <button class="button button-outline button-add" id="${productosRopa.id}" title="Clic para agregar al carrito" onclick="agregarCarrito(${productosRopa.id})">+</button>
                </div>
            </div>
`

}
function cargarProductos (array) {
    array.forEach((elemento) => {
        divContainer.innerHTML += retornarCardHTML(elemento)
    })
}
cargarProductos(productosRopa)



function agregarCarrito(idproducto){
    carrito.push(idproducto);
    actualizarCarrito();
}

function actualizarCarrito(){
    if(carrito.length > 0){
        document.getElementById("cantidadcarrito").innerText = "("  + carrito.length + ")";
        localStorage.setItem('carrito',JSON.stringify(carrito))
    }else{
        document.getElementById("cantidadcarrito").innerText = "";
    }

}