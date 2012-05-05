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
	
	$("#searchLink").addClass('current'); 
	$("#homeLink").removeClass('current');
	$("#bookingLink").removeClass('current');
	$("#contactLink").removeClass('current');
});



