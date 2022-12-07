function sumar()
{
  const $total_hermanos = document.getElementById('total_hermanos');
  let subtotal = 0;
  [ ...document.getElementsByClassName( "monto" ) ].forEach( function ( element ) {
    if(element.value !== '') {
      subtotal += parseFloat(element.value);
    }
  });
  $total_hermanos.value = subtotal;
}