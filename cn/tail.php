<script src="https://kit.fontawesome.com/f47c08e16a.js"></script>
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/d.js"></script>
<script type="text/javascript">
	var titles = {
		index:"Andere Brian's' Profile",
		articles:"Articles",
		attnint: "Internships and Attachments",
		itactivities: "Information Technology Activities",
		systems: "Systems I have Made / Worked on",
		work: "Work History"
	}
	$('.index').find('#title-m').text(titles.index);
	$('.articles').find('#title-m').text(titles.articles);
	$('.attnint').find('#title-m').text(titles.attnint);
	$('.itactivities').find('#title-m').text(titles.itactivities);
	$('.systems').find('#title-m').text(titles.systems);
	$('.work').find('#title-m').text(titles.work);

	$('#nav-bar li').bind('click',function(e) {
		$('#nav-bar').find('.active').removeClass('active');
		$(this).addClass('active');
	});

</script>