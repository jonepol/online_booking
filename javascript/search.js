$().ready(function() {
	$("#origin").autocomplete("getOrigin.php", {
		width: 200,
		matchContains: true,
		selectFirst: false,
	});
	$("#destination").autocomplete("getDestination.php", {
		width: 200,
		matchContains: true,
		selectFirst: false,
	});
});