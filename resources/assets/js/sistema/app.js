$(document).ready(function () {

  if ($(document).width() > 768) {
    $(document).scroll(function () {
      if ($(document).scrollTop() > 30) {
        $('.main-menu').addClass('scroll');
      } else {
        $('.main-menu').removeClass('scroll');
      }
    });
  }

  if( $('.editor').length > 0 ){
    $('.editor').froalaEditor({
      heightMin: 200,
      language: 'pt_br',
      toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent', 'insertLink', 'undo', 'redo'],
    });
  }

  $('img.img-editor').on('froalaEditor.image.replaced', function (e, editor, $img, response) {
    $(this).parent().find('.url-imagem').val($img.attr('src'));
  });

  if( $('.img-editor').length > 0 ){
    makeImgEditor($('.img-editor'));
  }

  $('.form-cadastro').on('submit', function () {
    cadastro($(this));
    return false;
  });

  $('.form-finaliza-cadastro').on('submit', function () {
    finalizaCadastro($(this));
    return false;
  });

  $('.form-esqueci').on('submit', function () {
    esqueciSenha($(this));
    return false;
  });

  $('.form-login').on('submit', function () {
    login($(this));
    return false;
  });

  $('.form-normal').on('submit', function () {
    submitForm($(this));
    return false;
  });

  $('.select2').select2();

});

function cadastro($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.serialize(),
    success: function (data) {
      $('body').removeClass('load');
      if (data == 'OK') {
        window.location.href = routes.sistema.pessoas.cadastro;
      } else {
        swal({
          title: 'Oops...',
          text: data,
          type: 'error'
        });
      }
    },
    error: function (data) {
      $('body').removeClass('load');
      Object.keys(data.responseJSON.errors).forEach(function (k) {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.error(
          data.responseJSON.errors[k],
          'Oops....'
        )
      });
    },
    beforeSend: function () {
    },
    complete: function () {}
  });
}

function finalizaCadastro($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.find('input,select,textarea').filter(function () { return !!this.value; }).serialize(),
    success: function (data) {
      $('body').removeClass('load');
      toastr.success(
        'Cadastro realizado com sucesso! \n\rPor favor, confirme seu cadastro através do link enviado para o e-mail informado.',
        'Tudo certo!', {
          timeOut: 5000,
          closeButton: true,
          showEasing: 'linear',
          showMethod: 'slideDown',
          closeMethod: 'fadeOut',
          positionClass: "toast-bottom-full-width",
          closeDuration: 300,
          closeEasing: 'swing',
          closeButton: false,
          progressBar: true,
          onHidden: function () {
            window.location.href = routes.sistema.pessoas.entrar
          }
        }
      );
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
    error: function (data) {
      $('body').removeClass('load');
      Object.keys(data.responseJSON.errors).forEach(function (k) {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.error(
          data.responseJSON.errors[k],
          'Oops....'
        )
      });
    }
  });
}

function esqueciSenha($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.serialize(),
    success: function (data) {
      $('body').removeClass('load');
      if (data == 'OK') {
        window.location.href = routes.ajax.home;
      } else {
        swal({
          title: 'Oops...',
          text: data,
          type: 'error'
        });
      }
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
    complete: function () {}
  });
}

function login($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.serialize(),
    success: function (data) {
      $('body').removeClass('load');
      if (data.resposta == 'OK') {
        window.location.href = data.url;
      } else {
        swal({
          title: 'Oops...',
          text: data,
          type: 'error'
        });
      }
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
    error: function (data) {
      $('body').removeClass('load');
      Object.keys(data.responseJSON.errors).forEach(function (k) {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.error(
          data.responseJSON.errors[k],
          'Oops....'
        )
      });
    },
    complete: function () {}
  });
}


function submitForm($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.find('input,select,textarea').filter(function () { return !!this.value; }).serialize(),
    success: function (data) {
      $('body').removeClass('load');
      if (data.resposta == 'OK') {
        swal({
          title: 'Tudo certo',
          text: data.mensagem,
          type: 'success'
        }).then((result) => {
          if( result.value ){
            window.location.href = data.url;
          }
        });
      } else {
        swal({
          title: 'Oops...',
          text: data.mensagem,
          type: 'error'
        });
      }
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
    error: function (data) {
      $('body').removeClass('load');
      Object.keys(data.responseJSON.errors).forEach(function (k) {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.error(
          data.responseJSON.errors[k],
          'Oops....'
        )
      });
    },
    complete: function () {}
  });
}


function makeImgEditor($this){
  $.FroalaEditor.DefineIcon('imageReplace', {NAME: 'image'});
  $this.froalaEditor({
    language: 'pt_br',
    imageEditButtons: [],
    imageInsertButtons: ['imageUpload'],
    imageUploadURL: $this.data('url'),
    imageUploadParams: {
      _token: $('meta[name=_token]').attr('content'),
    }
  });
  $this.on('click',function(){
    $this.data('froala.editor').commands.exec('imageReplace');
  });
}