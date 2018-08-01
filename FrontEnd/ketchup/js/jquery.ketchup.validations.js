jQuery.ketchup

.validation('required', 'El campo es requerido.', function(form, el, value) {
  var type = el.attr('type').toLowerCase();

  if(type == 'checkbox' || type == 'radio') {
    return (el.attr('checked') == true);
  } else {
    return (value.length != 0);
  }
})

.validation('minlength', 'El campo debe de tener minimo {arg1} caracteres.', function(form, el, value, min) {
  return (value.length >= +min);
})

.validation('maxlength', 'El campo debe de tener máximo {arg1} caracteres.', function(form, el, value, max) {
  return (value.length <= +max);
})

.validation('rangelength', 'Este campo debe de tener una longitud entre {arg1} y {arg2}.', function(form, el, value, min, max) {
  return (value.length >= min && value.length <= max);
})

.validation('min', 'Este campo al menos debe tener  {arg1}.', function(form, el, value, min) {
  return (this.isNumber(value) && +value >= +min);
})

.validation('max', 'Este campo no puede ser mayor que {arg1}.', function(form, el, value, max) {
  return (this.isNumber(value) && +value <= +max);
})

.validation('range', 'Debe estar entre {arg1} y {arg2}.', function(form, el, value, min, max) {
  return (this.isNumber(value) && +value >= +min && +value <= +max);
})

.validation('number', 'Debe ser un número.', function(form, el, value) {
  return this.isNumber(value);
})

.validation('digits', 'El campo debe de tener puros digitos.', function(form, el, value) {
  return /^\d+$/.test(value);
})

.validation('email', 'El correo electrónico debe ser válido.', function(form, el, value) {
  return this.isEmail(value);

})

.validation('url', 'Debe ser una URL válida.', function(form, el, value) {
  return this.isUrl(value);
})

.validation('username', 'El usuario debe válido.', function(form, el, value) {
  return this.isUsername(value);
})

.validation('match', 'Debe tener {arg1}.', function(form, el, value, word) {
  return (el.val() == word);
})

.validation('contain', 'Debe tener {arg1}', function(form, el, value, word) {
  return this.contains(value, word);
})

.validation('date', 'Debe ser una fecha válida.', function(form, el, value) {
  return this.isDate(value);
})

.validation('minselect', 'Select at least {arg1} checkboxes.', function(form, el, value, min) {
  return (min <= this.inputsWithName(form, el).filter(':checked').length);
}, function(form, el) {
  this.bindBrothers(form, el);
})

.validation('maxselect', 'Select not more than {arg1} checkboxes.', function(form, el, value, max) {
  return (max >= this.inputsWithName(form, el).filter(':checked').length);
}, function(form, el) {
  this.bindBrothers(form, el);
})

.validation('rangeselect', 'Select between {arg1} and {arg2} checkboxes.', function(form, el, value, min, max) {
  var checked = this.inputsWithName(form, el).filter(':checked').length;

  return (min <= checked && max >= checked);
}, function(form, el) {
  this.bindBrothers(form, el);
});
