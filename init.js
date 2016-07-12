		function init_app() {
			ajax_init();
			}		

		function ajax_init() {
			var kode = $('#kode').val();
			$.ajax({
				  url: 'http://www.itorget.no/tc/wp-content/themes/tc/server/server_tc.php',
				  type: 'post',
				  data : {appid : kode, srvc: 'init'},
				  dataType: 'json',
				  success: function(data) {
						initData(data);
						},
				  error: function(result){
						alert('error ajax_init');
						}
				});			
			}
			
		function local_storage_show() {	
			if(typeof(Storage) !== "undefined") {
				var url = local_storage_get('url'); 
				
				$("#local_vars").html('').trigger('create');
				$("#local_vars").append('url : '+url+'<br>').trigger('create');
				}
			}
			
			
		function initData(data) {			
			//save to local storage...then show local_storage_show...
			if (data !== '') {
                                alert('initdata - 1');
				var objs = data;
				
				$.each(objs, function(idx, obj){ 
					$.each(obj, function(key, value){
						local_storage_set(key, value);
					});
				});
				}
			else {
                                alert('initdata - 2');
				alert('Feil kode ' + $('#kode').val());
				$('#kode').val('');
				}			
			}
			
