$('#counter').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
	if (visible) {
		$(this).find('.count').each(function () {
			var $this = $(this);
			$({ Counter: 0 }).animate({ Counter: $this.text() }, {
				duration: 2000,
				easing: 'swing',
				step: function () {
					$this.text(Math.ceil(this.Counter));
				}
			});
		});
		$(this).unbind('inview');
	}
});
