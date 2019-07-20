jQuery(document).ready(function ($) {
  // Evento de click no botão para fazer upload do vídeo dos widgets.
  $(document).on("click", ".upload_video_button", function (e) {
    e.preventDefault();
    var $button = $(this);

    // Cria a media frame.
    var file_frame = wp.media.frames.file_frame = wp.media({
      title: 'Escolha ou envie um vídeo',
      library: { type: 'image' },
      button: { text: 'Select' },
      multiple: false
    });

    // Callback executado quando uma imagem foi selecionada.
    file_frame.on('select', function (e) {
      var attachment = file_frame.state().get('selection').first().toJSON();
      $button.siblings('input').val(attachment.url);
      $button.siblings('input').trigger('change'); 
    });

    // Abre o modal.
    file_frame.open();
  });

  // Evento de click no botão para fazer upload da logo dos widgets.
  $(document).on("click", ".upload_logo_button", function (e) {
    e.preventDefault();
    var $button = $(this);

    var file_frame = wp.media.frames.file_frame = wp.media({
      title: 'Escolha ou envie uma logo',
      library: { type: 'image' },
      button: { text: 'Select' },
      multiple: false
    });

    file_frame.on('select', function (e) {
      var attachment = file_frame.state().get('selection').first().toJSON();
      $button.siblings('input').val(attachment.url);
      $button.siblings('input').trigger('change'); 
    });

    file_frame.open();
  });

  // Evento de click no botão para fazer upload do icon do pesquisador.
  $(document).on("click", ".upload_icon_button", function (e) {
    e.preventDefault();
    var $button = $(this);

    var file_frame = wp.media.frames.file_frame = wp.media({
      title: 'Escolha ou envie uma logo',
      library: { type: 'image' },
      button: { text: 'Select' },
      multiple: false
    });

    file_frame.on('select', function (e) {
      var attachment = file_frame.state().get('selection').first().toJSON();
      $button.siblings('input').val(attachment.url);
      $button.siblings('input').trigger('change'); 
    });

    file_frame.open();
  });
});
