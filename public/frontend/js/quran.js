
var current_page = 1;

function load_suras() {
    p = $.ajax({
      url: "../public/frontend/json/suras.json",
      dataType: 'json'
    });
    // 
    p.done(function(data) {
        str = '';
        for (var i=0; i < data.length ; i++) {
            sura = data[i];
            str += '<tr id="sura_link_'+ sura.id +'">';
            str += '<td>' + (i+1) + '</td>';
            str += '<td> <a class="sura_link" href="" ';
            str += 'data-page="' + sura.page +'" >';
            str += sura.name + '</a></td>';
            str += '<td>' + sura.page + '</td>';
            str += '<td>' + sura.ayas + '</td>';
            str += '</tr>';
        }
        $('#suras tbody').html(str);
        if (window.matchMedia('(max-width: 767px)').matches) {
            $("#suras").addClass("hideSoura");
            $('.sura_link').parents('tr').on("click",function(){
                $("#suras").toggleClass("hideSoura");
                // console.log('asdasdas');
            });
            $('.btn-qu').on("click",function(){
                $("#suras").toggleClass("hideSoura");
                console.log('asdasdas');
            });
        }
    });
}


function sura_clicked(event) {
    event.preventDefault();
    event.stopPropagation();
    el = event.target;
    page = $(el).data('page');
    // console.log('Sura Clicked!' + page);
    load_page(page);
}

function load_page(page) {
    if (page < 1) page = 1;
    if (page > 604) page = 604;
    current_page = page;
    $("#page_num").html('صفحة:'+current_page);

    $page = $('#page');
    $page.html('');
    $taf = $('#tafseer');
    $taf.html('');

    if (page<10) {
        page_str = '00'+page;
    } else if (page<100) {
        page_str = '0'+page;
    } else {
        page_str = ''+page;
    }
    $page.css('background-image', 'url(../public/frontend/img/'+page_str+'.jpg)');
    // 

    // aya segments
    p = $.ajax({
        url: "../public/frontend/json/page_" +page+".json",
      dataType: 'json'
    });
    // 

    p.fail(function(data) {
        console.log('Failed to load page map!');
    });

    p.done(function(data) {
        // Clear selected
        $('#suras tr').removeClass('active');
        for (var i=0; i < data.length ; i++) {
            aya = data[i];
            // console.log('Sura:' + aya.sura_id+' Aya:'+aya.aya_id);
            // Activate Sura
            $('#sura_link_'+aya.sura_id).addClass('active');

            $a = $('<a>')
            $a.attr('href', '#'+aya.aya_id);
            $a.data('sura', aya.sura_id);
            $a.data('aya', aya.aya_id);
            $a.attr('data-toggle', 'modal');
            $a.attr('data-target', '#exampleModalLong');
            $a.addClass('aya_link');
            for (var j=0; j < aya.segs.length ; j++) {
                seg = aya.segs[j];
                if (seg.w !=0 && seg.w < 15) continue;
                if (seg.x < 15) {
                    seg.w += seg.x;
                    seg.x = 0;
                }
                $d = $('<div>')
                .css('top', seg.y+'px')
                .css('left', seg.x+'px')
                .css('width', seg.w+'px')
                .css('height', seg.h+'px');
                $a.append($d);
                // console.log('Segment:'+aya.sura_id+' Aya '+aya.aya_id);
            }
            $page.append($a);
        }
        $new_width = $('#page').width()- ($('#page').width()*15.93/100);
        $new_hight = $('#page').height()- ($('#page').height()*20/100);
        $old_width = 290;
        $old_hight = 430;
        $plus_left = $('#page').width()*8.43/100;
        $plus_top = $('#page').height()*8.64/100;

        let x = $("#page .aya_link div");
        // debugger;
        $.each(x,function(){
            // change top
            if($(this).position().top != 0)
            {
                let top= $(this).position().top * $new_hight / $old_hight + $plus_top;
                $(this).css({'top' : top + 'px'});
                // console.log($(this).position().top * $new_hight / $old_hight);
                // console.log('--------');
            }
            else{
                $(this).css({'top' : $plus_top + 'px'});
            }
            //change left
            if($(this).position().left != 0)    
            {
                let left= $(this).position().left * $new_width / $old_width + $plus_left;
                $(this).css({'left' : left + 'px'});
            }
            else{
                $(this).css({'left' :$plus_left + 'px'});
            }
            // change height
            let height= $(this).height() * $new_hight / $old_hight;
            $(this).css({'height' : height + 'px'});
            // change width
            let width= $(this).width() * $new_width / $old_width;
            $(this).css({'width' : width + 'px'});
        });
    });

}

function aya_clicked(event) {
    //hide
    $(".show-1").hide();
    $(".show-2").hide();
    $(".show-3").hide();
    $(".show-4").hide();
    $(".show-5").hide();
    $(".show-6").hide();
    $(".show-7").hide();
    $(".show-8").hide();


    event.preventDefault();
    event.stopPropagation();
    el = $(event.target).closest('a');
    sura = el.data('sura');
    aya = el.data('aya');
    $('a.aya_link').removeClass('active');
    el.addClass('active');
    // console.log('Aya Clicked!' + sura + ' ' + aya);
    load_aya(sura, aya);
}


function load_aya(sura, aya) {
    // get ayah text
    $.ajax({
        url:'http://api.alquran.cloud/v1/surah/'+sura,
        dataType: 'json',
        success:function(data) {
            $('#aya-text').html(aya+'-' +data.data.ayahs[aya-1].text);
        }
    });
    // json
    var tafseer_name = Array('مشكل','نصي','الجلالين','الميسر', 'ابن كثير');
    $taf = $('#tafseer');
    $taf.html('');

    p = $.ajax({
        url: "../public/frontend/json/aya_" +sura+"_"+aya+".json",
      dataType: 'json'
    });
    // 

    p.fail(function(data) {
        console.log('Failed to load Tafseer!');
    });

    p.done(function(data) {
        str = '';
        drop_down = '';
        tafsers = '';
        $imam_dropdown_list = $('#ourSelect');
        $tafser_imam_container = $('#tafser_imam_container');
        $student_container = $('#student_container');
        $type_container = $('#type_container');

        for (var i=0; i < data.length ; i++) {
            taf = data[i];
            drop_down += '<option class="'+tafseer_name[taf.type].replace(' ', '_')+'">'+tafseer_name[taf.type]+'</option>';
            if(i==0)
            {
                tafsers += '<div class="imam_tafser" id="'+tafseer_name[taf.type].replace(' ', '_')+'" style="padding-top: 20px;" class="text-p">تفسير الامام : <span>'+taf.text+'</span> </div>';
            }
            else
            {
                tafsers += '<div class="imam_tafser" id="'+tafseer_name[taf.type].replace(' ', '_')+'" style="padding-top: 20px;display:none;" class="text-p">تفسير الامام : <span>'+taf.text+'</span> </div>';
            }

            // str += '<strong>'+tafseer_name[taf.type]+'</strong><br>'+taf.text+'<hr>';
        }
        // $taf.html(str);
        $.ajax({
            url:'../tafser/'+sura+'/'+'aya/'+aya,
            dataType: 'json',
            success:function(data) {
                // $taf.delay(1000).prepend(data);
                // console.log(data[0]);
                drop_down+=data[0];
                tafsers+=data[1];
                $imam_dropdown_list.html(drop_down);
                $tafser_imam_container.html(tafsers);
            }
        });
        $.ajax({
            url:'../buttons/'+sura+'/'+'aya/'+aya,
            dataType: 'json',
            success:function(data) {
                console.log('adas');
                console.log(data[0]);
                $type_container.html(data[0]);
                $student_container.html(data[1]);
            }
        });
        // console.log(drop_down);
        
    });


}



function page_change(event) {
    event.preventDefault();
    event.stopPropagation();
    el = $(event.target);
    offset = el.data('offset');
    console.log('Offset:'+ offset);
    page =  parseInt(current_page) + offset;
    load_page(page);
}



$(function () {

    console.log('JQuery Started!');
    load_suras();
    load_page(1);
    $(document).on('click', 'a.sura_link', sura_clicked);
    $(document).on('click', 'a.aya_link', aya_clicked);

    $('.page-change').click(page_change);

    // Hotkeys
    //$(document).bind('keydown', 'right', function() { p = parseInt(current_page) -1; document.location='#?page='+ p; }  );
    //$(document).bind('keydown', 'left', function() { p = parseInt(current_page) +1; document.location='#?page='+ p; }  );
    $(document).bind('keydown', 'right', function() { p = parseInt(current_page) -1; load_page(p); }  );
    $(document).bind('keydown', 'left', function() { p = parseInt(current_page) +1; load_page(p); }  );
});


