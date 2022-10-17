
			function inputreplace(field, defaultvalue) {
				$(field).focus(function() {
					if ($(this).val() == defaultvalue) {
						$(this).val('');
					}
				});
				$(field).blur(function() {
					if ($(this).val() == '') {
						$(this).val(defaultvalue);
					}
				});
			}
