<?php 

	function pleio_test_init(){
		elgg_extend_view("footer/analytics", "pleio_test/footer");
		elgg_extend_view("css/elgg", "pleio_test/css");
		elgg_extend_view("css/admin", "pleio_test/css");
	}
	
	elgg_register_event_handler("init", "system", "pleio_test_init");