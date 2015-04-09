var repliesCount = 0,
    currentReply = 1;

$(document).ready(function(){
    repliesCount = $('.reply').length;
    $('.reply').each(function(indx, elm){
        if (indx >= 2){
            $(elm).hide();
        }
        if($(elm).find('.content').text().length < 172) {
            $(elm).find('a.more').hide();
        }
    });

});

$(document)
.on('click', '#replies .more', function(e){
        e.preventDefault();
        $(this).hide();
        $(this).parent().find('.content').addClass('opened');
    })
    .on('click', '.more-replies', function(e){
        e.preventDefault();
        currentReply += 2;
        $('.reply').each(function(indx, elm){
            if (indx <= currentReply){
                $(elm).show();
            }
        });
        if (currentReply >= repliesCount){
            $(this).hide();
        }
    })
;