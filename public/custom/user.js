if (document.getElementById("country") != null) {
	
    $.ajax({
        url: base_url + 'countries',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
			var firm = data.data
            firm.forEach(function(item, index) {
				if (item.id == "101") {
                    $(".country :selected").text(item.name + ' (' + item.sortname + ')');
                    $(".country :selected").val(item.id);

                    $.ajax({
                        url: base_url + 'states/' + item.id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
							var state = '';
                            var firm = data.data
                            firm.forEach(function(item, index) {
                                state += '<option value="' + item.id + '">' + item.name + ' (' + item.state_code + ')</option>';
                                $(".select2").select2();
                            });
							$(".state").append(state);
                        }
                    });
                } else {
                    $(".country").innerHTML += '<option value="' + item.id + '">' + item.name + ' (' + item.sortname + ')</option>';
                }
            });
        }
    });
}