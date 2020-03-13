var id= 1;
$(document).ready(function () {

    $('#nextArticles').click(function () {

        $.get("nextArticles.php?id=" + id, function (result) {
            $content = $('main').html() + result;
            $('main').html($content);
        });
        
    });

});