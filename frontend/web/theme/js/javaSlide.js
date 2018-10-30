/**
 * Created by User on 6/15/2018.
 */
function nextSlide() {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find('.part001-main-item').each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.next().attr('data-target');
        }
    });

    if($thisNew.next().next().next().length == 0){
        //neu khong co
        $('body').find('.part001-main-item').first().attr('data-info', 3);
    }else{
        $thisNew.next().next().next().attr('data-info', 3);
    }

    if($thisNew.next().next().length == 0){
        //neu khong co
        $('body').find('.part001-main-item').first().attr('data-info', 2);
        $('body').find('.part001-main-item').first().next().attr('data-info', 3);
    }else{
        $thisNew.next().next().attr('data-info', 2);
    }

    if($thisNew.next().length == 0){
        $('body').find('.part001-main-item:first').attr('data-info', 1).addClass('active');
        $('body').find('.part001-main-item').first().next().attr('data-info', 2);
        $('body').find('.part001-main-item').first().next().next().attr('data-info', 3);

        $thisInfo = $('body').find('.part001-main-item:first').attr('data-target');
    }else {
        $thisNew.next().addClass('active').attr('data-info', 1);
    }

    $thisNew.removeClass('active').attr('data-info',4);

    //bang thu 01
    $('.bang-01').find('li[class*=target]').each(function () {
       if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
       } else {
           $(this).removeClass('active');
       }
    });

    //bang thu 02
    $('.bang-02').find('ul[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    $('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    return true;
}
function prevSlide() {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find('.part001-main-item').each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.prev().attr('data-target');
        }
    });

    $thisNew.removeClass('active').attr('data-info',4);

    if($thisNew.prev().prev().prev().length == 0){
        //neu khong co
        $('body').find('.part001-main-item').last().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().prev().attr('data-info', 3);
    }

    if($thisNew.prev().prev().length == 0){
        //neu khong co
        $('body').find('.part001-main-item').last().attr('data-info', 2);
        $('body').find('.part001-main-item').last().prev().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().attr('data-info', 2);
    }

    if($thisNew.prev().length == 0){
        $('body').find('.part001-main-item').last().attr('data-info', 1).addClass('active');
        $('body').find('.part001-main-item').last().prev().attr('data-info', 2);
        $('body').find('.part001-main-item').last().prev().prev().attr('data-info', 3);

        $thisInfo = $('body').find('.part001-main-item').last().attr('data-target');
    }else {
        $thisNew.prev().addClass('active').attr('data-info', 1);
    }


    //bang thu 01
    $('.bang-01').find('li[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    //bang thu 02
    $('.bang-02').find('ul[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    $('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    return true;
}

/** phan slide page kts */
function nextSlide01(begin) {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find(begin).each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.next().attr('data-target');
        }
    });

    if($thisNew.next().next().next().length == 0){
        //neu khong co
        $('body').find(begin).first().attr('data-info', 3);
    }else{
        $thisNew.next().next().next().attr('data-info', 3);
    }

    if($thisNew.next().next().length == 0){
        //neu khong co
        $('body').find(begin).first().attr('data-info', 2);
        $('body').find(begin).first().next().attr('data-info', 3);
    }else{
        $thisNew.next().next().attr('data-info', 2);
    }

    if($thisNew.next().length == 0){
        $('body').find(begin+':first').attr('data-info', 1).addClass('active');
        $('body').find(begin).first().next().attr('data-info', 2);
        $('body').find(begin).first().next().next().attr('data-info', 3);

        $thisInfo = $('body').find(begin+':first').attr('data-target');
    }else {
        $thisNew.next().addClass('active').attr('data-info', 1);
    }

    $thisNew.removeClass('active').attr('data-info',4);

    //bang thu 01
    /*$('.bang-01').find('li[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });*/

    //bang thu 02
    $('.bang-02').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    /*$('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });*/

    return true;
}
function prevSlide01(begin) {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find(begin).each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.prev().attr('data-target');
        }
    });

    $thisNew.removeClass('active').attr('data-info',4);

    if($thisNew.prev().prev().prev().length == 0){
        //neu khong co
        $('body').find(begin).last().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().prev().attr('data-info', 3);
    }

    if($thisNew.prev().prev().length == 0){
        //neu khong co
        $('body').find(begin).last().attr('data-info', 2);
        $('body').find(begin).last().prev().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().attr('data-info', 2);
    }

    if($thisNew.prev().length == 0){
        $('body').find(begin).last().attr('data-info', 1).addClass('active');
        $('body').find(begin).last().prev().attr('data-info', 2);
        $('body').find(begin).last().prev().prev().attr('data-info', 3);

        $thisInfo = $('body').find(begin).last().attr('data-target');
    }else {
        $thisNew.prev().addClass('active').attr('data-info', 1);
    }


    //bang thu 01
    /*$('.bang-01').find('li[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });*/

    //bang thu 02
    $('.bang-02').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    /*$('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });*/

    return true;
}

/** phan slide page index **/
function nextSlide02() {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find('.container-slide-item').each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.next().attr('data-target');
        }
    });

    if($thisNew.next().next().next().length == 0){
        //neu khong co
        $('body').find('.container-slide-item').first().attr('data-info', 3);
    }else{
        $thisNew.next().next().next().attr('data-info', 3);
    }

    if($thisNew.next().next().length == 0){
        //neu khong co
        $('body').find('.container-slide-item').first().attr('data-info', 2);
        $('body').find('.container-slide-item').first().next().attr('data-info', 3);
    }else{
        $thisNew.next().next().attr('data-info', 2);
    }

    if($thisNew.next().length == 0){
        $('body').find('.container-slide-item:first').attr('data-info', 1).addClass('active');
        $('body').find('.container-slide-item').first().next().attr('data-info', 2);
        $('body').find('.container-slide-item').first().next().next().attr('data-info', 3);

        $thisInfo = $('body').find('.container-slide-item:first').attr('data-target');
    }else {
        $thisNew.next().addClass('active').attr('data-info', 1);
    }

    $thisNew.removeClass('active').attr('data-info',4);

    //bang thu 01
    /*$('.bang-01').find('li[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });*/

    //bang thu 02
    $('.bang-02').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    /*$('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });*/

    return true;
}
function prevSlide02() {
    var $thisNew = false;
    var $thisInfo = 0;
    $('body').find('.container-slide-item').each(function () {
        if($(this).hasClass('active')) {
            $thisNew = $(this);
            $thisInfo = $thisNew.prev().attr('data-target');
        }
    });

    $thisNew.removeClass('active').attr('data-info',4);

    if($thisNew.prev().prev().prev().length == 0){
        //neu khong co
        $('body').find('.container-slide-item').last().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().prev().attr('data-info', 3);
    }

    if($thisNew.prev().prev().length == 0){
        //neu khong co
        $('body').find('.container-slide-item').last().attr('data-info', 2);
        $('body').find('.container-slide-item').last().prev().attr('data-info', 3);
    }else{
        $thisNew.prev().prev().attr('data-info', 2);
    }

    if($thisNew.prev().length == 0){
        $('body').find('.container-slide-item').last().attr('data-info', 1).addClass('active');
        $('body').find('.container-slide-item').last().prev().attr('data-info', 2);
        $('body').find('.container-slide-item').last().prev().prev().attr('data-info', 3);

        $thisInfo = $('body').find('.container-slide-item').last().attr('data-target');
    }else {
        $thisNew.prev().addClass('active').attr('data-info', 1);
    }


    //bang thu 01
    /*$('.bang-01').find('li[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });*/

    //bang thu 02
    $('.bang-02').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    //bang thu 03
    /*$('.bang-03').find('div[class*=target]').each(function () {
        if($(this).hasClass('target-'+$thisInfo)){
            $(this).show();
        } else {
            $(this).hide();
        }
    });*/

    return true;
}