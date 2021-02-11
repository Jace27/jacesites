$('input[type=file]').change(function(){
    $('input[type=text]').val($('input[type=file]')[0].files[0].name);
});
document.body.onload = function() {
    $('button').click(function (e) {
        let body = new FormData();
        body.append('password', sha256($('input[type=text]').val()));
        body.append('downloadable', $('#downloadable')[0].checked ? '1' : '0');
        body.append('file', $('input[type=file]')[0].files[0]);
        $.ajax({
            url: 'encoder.php',
            method: 'post',
            data: body,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                alert(data);
            }
        });
    });
};