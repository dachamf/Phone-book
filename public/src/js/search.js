var timer;

function up()
{
    timer = setTimeout(function () {
        var keywords = $('#serch-input').val();
        if(keywords.length > 0)
        {
            $.post('http://laravel_practice/search/executeSearch', {keywords: keywords}, function(markup)
            {
                $('#search-results').html(markup);
            });
        }

    }, 500);
}

function down()
{
    clearTimeout(timer);
}
