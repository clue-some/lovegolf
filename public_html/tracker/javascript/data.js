
$(".status").ajaxStart(function () {
	$(this).css('background-color', '#66cc66');
});

$(".status").ajaxStop(function () {
	$(this).css('background-color', 'transparent');
});