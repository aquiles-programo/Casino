$("#update_juego_modal").on("show.bs.modal", async function (event) {
  const button = $(event.relatedTarget);
  const juego_id = button.data("id_juego");
  let modal = $(this);
  let juego = await get_juego(juego_id);
  $('#update_juego_form').attr('action', `juegos/${juego.id}`);
  modal.find('#nombre').val(juego.nombre)
  modal.find('#descripcion').val(juego.descripcion)
  modal.find('#url_imagen').val(juego.url_imagen)
  modal.find('#url_juego').val(juego.url_juego)  
});

async function get_juego(id) {
  try {
    let juego = await $.get(`juegos/${id}`);
    return juego;
  } catch (error) {
    console.log(error);
  }
}