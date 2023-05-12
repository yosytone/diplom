

(function ($, Drupal, settings) {
  Drupal.behaviors.pizza = {
    attach: function (context) {

      $('#edit-preview').on('click', function(e) {
        e.preventDefault(); 
        var newNodes = $('<a href="#">Hello</a> <a href="#">World</a>').appendTo('#someDiv');
Drupal.attachBehaviors(newNodes);           
    }); 
    
      
    }
  }
})(jQuery, Drupal, drupalSettings.pizza);
