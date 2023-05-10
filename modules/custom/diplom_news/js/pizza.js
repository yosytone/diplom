(function ($, Drupal, settings) {
  Drupal.behaviors.pizza = {
    attach: function (context) {

      document.querySelectorAll('#pizza-form .form-select, #pizza-form .form-radio').forEach((element) => {
        element.addEventListener('change', () => {

          //alert(settings.myvar)

          let finalPrice = 0
          let tPrice = 0
          let aPrice = 0

          let type_id = 0;
          let area_id = 0;

          document.querySelectorAll('#pizza-form .form-select').forEach((elem) => {
            type_id = elem.id.replace('edit-quantity-', '')
            tPrice += Number(settings.typePrice[type_id])*Number(elem.value);
          })

          if (document.querySelector('input[name=district]:checked')) {
            aPrice += Number(settings.distPrice[document.querySelector('input[name=district]:checked').value])
          }

          finalPrice = tPrice + aPrice

          document.querySelector('input[name=price]').value = finalPrice
        })
      })
    }
  }
})(jQuery, Drupal, drupalSettings.pizza);
