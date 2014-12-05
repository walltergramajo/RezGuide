var base_url = "localhost:8888/ryan/RezGuide/CMS/index.php/";

function ajaxSearch() {
    var input_data = $('#nameSearch').val();
    if (input_data.length === 0) {
        $('#suggestions').hide();
    } else {

        var post_data = {
            'search_data': input_data
        };

        $.ajax({
            url: base_url + 'livesearch/autocomplete',
            type: 'GET',
            data: post_data,
            dataType: 'json',
            success: function(result) {
                // return success
                // if (data.length > 0) {
                //     $('#suggestions').show();
                //     $('#autoSuggestionsList').addClass('auto_list');
                //     $('#autoSuggestionsList').html(data);
                // }
            console.log(result);
            },
            error: function(){
                console.log("not working");
            }
        });

    }
}