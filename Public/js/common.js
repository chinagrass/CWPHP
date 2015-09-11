var ping_interval_id;
var ping_func = function() {
	var ping_url = site_config('base_url') + "user/ping";
	$.getJSON(ping_url, function(data) {
		console.log("ping: " + data.status);
		if (data.status == "OK") {
			//do nothing
		} else {
			window.clearInterval(ping_interval_id);
		}
	});
};
