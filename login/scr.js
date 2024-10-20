const carrito = document-getElementById( 'carrito');
const const const const
elementos1 = document.getElementById( 'lista-1');
elementos2 = document-getElementById( 'lista-2');
lista = document. querySelector ('#lista-carrito tbody');
vaciarCarritoBtn = document-getElementById( 'vaciar-carrito');
cargarEventListeners();
function cargarEventListeners() {
elementos1. addEventListener( 'click', comprarElemento); elementos2.addEventListener('click', comprarElemento); carrito.addEventListener('click', eliminarElemento);
vaciarCarritoßtn.addEventListener('click', vaciarCarrito);
｝
function comprarElemento(e) 1
e. preventDefault();
if(e.target.classList.contains('agregar-carrito')) {
const elemento = e.target.parentElement.parentElement;
leerDatosElemento(elemento);
｝  