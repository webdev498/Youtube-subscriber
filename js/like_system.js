$(document).ready(function() {
	$(".ls_like").click(
	function()
	{
		var id = $(this).parent(".ls_box").attr("id"); // pobieramy ID wpisu z atrybutu elementu rodzica
		var url = 'http://marketofskripts.pl/ajax.php?id=' + id + '&action=like';
		$.getJSON(
			url,
			function(data){
				if (data != 'bad') {
					if (data['change'] == 'yes') {
						count = $("#"+id+" .ls_count_dislike");
						c = parseInt(count.html());
						c = c - 1;
						count.html(c);
					}
					count = $("#"+id+" .ls_count_like");
					c = parseInt(count.html());
					c = c + 1;
					count.html(c);
				}
			},
			'json'
		);
		$(this).addClass("ls_select");
		$("#"+id+" .ls_dislike").removeClass("ls_select");
	})
	$(".ls_dislike").click(
	function()
	{
		var id = $(this).parent(".ls_box").attr("id");
		var url = 'http://marketofskripts.pl/ajax.php?id=' + id + '&action=dislike';
		$.getJSON(
			url,
			function(data){
				if (data != 'bad') {
					if (data['change'] == 'yes') {
						count = $("#"+id+" .ls_count_like");
						c = parseInt(count.html());
						c = c - 1;
						count.html(c);
					}
					count = $("#"+id+" .ls_count_dislike");
					c = parseInt(count.html());
					c = c + 1;
					count.html(c);
				}
			},
			'json'
		);
		$(this).addClass("ls_select");
		$("#"+id+" .ls_like").removeClass("ls_select");
	})
});