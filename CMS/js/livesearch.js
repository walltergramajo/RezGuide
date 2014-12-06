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
            url: base_url + "livesearch/autocomplete",
            type: 'POST',
            data: post_data,
            success: function(result) {
                // return success
                // if (data.length > 0) {
                //     $('#suggestions').show();
                //     $('#autoSuggestionsList').addClass('auto_list');
                //     $('#autoSuggestionsList').html(data);
                // }
            // var jsondata = JSON.parse(result);
            console.log(result);
            },
            error: function(){
                console.log("not working");
            }
        });

        // $.getJSON(base_url + 'livesearch/autocomplete', post_data, function(data){
        //     console.log(data);
        // });

    }
}