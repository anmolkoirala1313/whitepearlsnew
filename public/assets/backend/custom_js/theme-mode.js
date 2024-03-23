$(document).on('click','#change-theme-mode', function (e) {
    e.preventDefault();
    var mode = $('html').attr('data-layout-mode');
    var formData = new FormData();
    formData.append('setting_id', set_id);
    formData.append('theme_mode', mode);
    var url = "/adminsite/setting/theme-mode"
    $.ajax({
        type : 'POST',
        url : url,
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        },
        cache: false,
        contentType: false,
        processData: false,
        data : formData,
        success: function(response){

        }, error: function(response) {
            console.log(response);
        }
    });
});


