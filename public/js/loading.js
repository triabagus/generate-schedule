$(document).ready(function() {
    $("#form-register").submit(function(e) {
        e.preventDefault()

        $("#loader").show()

        $(this).ajaxSubmit({
            target: "#targetLayer",
            beforeSubmit: function() {
                $("#progress-bar").width('0%');
            },
            uploadProgress: function(event, progress, total, percentComplete) {
                $('#progress-bar').width(percentComplete + '%')
                $('#progress-bar').html('<div id="progress-status">' + percentComplete + '%</div>')
            },
            success:function() {
                $("#loader").hide()
            },
            resetForm:true
        })
        return false
    })
})

// $(document).ready(function() {
//     $('form').ajaxForm({
//         beforeSend:function(){
//             $('#success').empty();
//             $('#progress-bar').text('0%');
//             $('#progress-bar').css('width', '0%');
//         },
//         uploadProgress:function(event, position, total, percentComplete)
//         {
//             $('#progress-bar').text(percentComplete + '0%');
//             $('#progress-bar').css('width', percentComplete + '0%');
//         },
//         success:function(data)
//         {
//             if (data.success) {
//                 $('#success').html('<div class="text-success text-center"> ' + data.success + ' </div>');
//                 $('#success').append(data.submit);
//                 $('#progeress-bar').text('Generated');
//                 $('#progress-bar').css('width', '95%');
//             }
//         }
//     });
// })