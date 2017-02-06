$('.pull-down').load(function() {
  var $this = $('.down');
  $this.css('margin-top', $('.head').height() - $this.height());
});
