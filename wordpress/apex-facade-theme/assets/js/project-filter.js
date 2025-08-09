jQuery(document).ready(function($){
    $('.project-filter button').on('click', function(){
        var type = $(this).data('type');
        $.post(apexfacade_ajax.url, { action: 'filter_projects', type: type }, function(res){
            if(res.success){
                $('#projects-container').html(res.data);
            }
        });
    });
});
