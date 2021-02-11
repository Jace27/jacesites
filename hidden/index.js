let image, img, canvas = document.getElementById('canvas');

document.body.onload = function() {
    $('button').click(function () {
        let body = new FormData();
        body.append('password', sha256($('input[type=text]').val()));
        $.ajax({
            url: 'file.php',
            method: 'post',
            data: body,
            processData: false,
            contentType: false,
            success: function (data, status, xhr) {
                console.log(xhr);
                if (xhr.responseText == 'nothing found') {
                    alert('Файл не найдено');
                } else {
                    if (xhr.getResponseHeader('Content-Type').indexOf('image/') != -1) {
                        img = new Image();
                        img.src = 'data:image/png;base64,' + xhr.responseText.split('|')[1];
                        image = img.src;
                        img.onload = function () {
                            if (xhr.responseText.split('|')[0] == '1') {
                                $('#response').html('<img id="canvas" style="border: 1px solid black; display: block; float: none; width: 100%;">');
                                canvas = document.getElementById('canvas');
                                canvas.src = img.src;
                            } else {
                                $('#response').html('<div id="canvas" style="background-size: contain; border: 1px solid black; display: block; float: none; width: 100%;">&nbsp;</div>');
                                $('#canvas').css('background-image', 'url(' + img.src + ')');
                                $('#canvas').css('height', Math.floor(1.0 * document.getElementById('canvas').clientWidth / img.naturalWidth * img.naturalHeight) + 'px');
                            }
                        }
                    } else {
                        $('#response').html('<div id="canvas" style="border: 1px solid black; display: block; float: none; width: 100%; height: calc(100% - '+$('#main')[0].clientHeight+'px); word-break: break-all">'+xhr.responseText.split('|')[1]+'</div>');
                    }
                    if (xhr.responseText.split('|')[0] == '0') {
                        document.onkeydown = function () {
                            $('#canvas').css('background-image', '');
                            $('#canvas').html('');
                        }
                        window.onclick = function () {
                            $('#canvas').css('background-image', '');
                            $('#canvas').html('');
                        }
                        window.onblur = function () {
                            $('#canvas').css('background-image', '');
                            $('#canvas').html('');
                        }
                        canvas = document.getElementById('canvas');
                        canvas.onmouseleave = function () {
                            $('#canvas').css('background-image', '');
                            $('#canvas').html('');
                        }
                    } else {
                        document.onkeydown = null;
                        window.onclick = null;
                        window.onblur = null;
                        canvas = document.getElementById('canvas');
                        canvas.onmouseleave = null;
                    }
                }
            }
        });
    });
}