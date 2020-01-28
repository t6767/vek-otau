$(function () {
  var g = 36;
    var d = function () {};
    $(document).delegate(".b-ball_bounce", "mouseenter", function () {
        b(this);
        m(this)
    }).delegate(".b-ball_bounce .b-ball__right", "mouseenter", function (i) {
        i.stopPropagation();
        b(this);
        m(this)
    });
 
      function h(i) {
        if ($.browser.msie) {
            return window[i]
        } else {
            return document[i]
        }
    }
  
      function b(n) {
        if (n.className.indexOf("b-ball__right") > -1) {
            n = n.parentNode
        }
        var i = /b-ball_n(\d+)/.exec(n.className);
        var j = /b-head-decor__inner_n(\d+)/.exec(n.parentNode.className);
        if (i && j) {
            i = parseInt(i[1], 10) - 1;
            j = parseInt(j[1], 10) - 1;
            d((i + j * 9) % g)
        }
    }
  
   function m(j) {
        var i = $(j);
        if (j.className.indexOf(" bounce") > -1) {
            return
        }
        i.addClass("bounce");

        function n() {
            i.removeClass("bounce").addClass("bounce1");

            function o() {
                i.removeClass("bounce1").addClass("bounce2");

                function p() {
                    i.removeClass("bounce2").addClass("bounce3");

                    function q() {
                        i.removeClass("bounce3")
                    }
                    setTimeout(q, 300)
                }
                setTimeout(p, 300)
            }
            setTimeout(o, 300)
        }
        setTimeout(n, 300)
    }
  
});








jQuery(function ($) {
    $('#block1kvar11').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met11').html($('#meta11-' + qq).data('id'));
        $('#blok1img').attr('src', $('#meta11-' + qq).data('img'));
        $('#blok1img1').attr('href', $('#meta11-' + qq).data('img'));
    });
    $('#block1kvar12').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met12').html($('#meta12-' + qq).data('id'));
        $('#blok1img').attr('src', $('#meta12-' + qq).data('img'));
        $('#blok1img1').attr('href', $('#meta12-' + qq).data('img'));
    });
    $('#block1kvar13').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met13').html($('#meta13-' + qq).data('id'));
        $('#blok1img').attr('src', $('#meta13-' + qq).data('img'));
        $('#blok1img1').attr('href', $('#meta13-' + qq).data('img'));
    });
    $('#block1kvar14').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met14').html($('#meta14-' + qq).data('id'));
        $('#blok1img').attr('src', $('#meta14-' + qq).data('img'));
        $('#blok1img1').attr('href', $('#meta14-' + qq).data('img'));
    });
    $('#block2kvar18').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met18').html($('#meta18-' + qq).data('id'));
        $('#blok2img').attr('src', $('#meta18-' + qq).data('img'));
        $('#blok2img1').attr('href', $('#meta18-' + qq).data('img'));
    });
    $('#block2kvar17').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met17').html($('#meta17-' + qq).data('id'));
        $('#blok2img').attr('src', $('#meta17-' + qq).data('img'));
        $('#blok2img1').attr('href', $('#meta17-' + qq).data('img'));
    });
    $('#block2kvar16').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met16').html($('#meta16-' + qq).data('id'));
        $('#blok2img').attr('src', $('#meta16-' + qq).data('img'));
        $('#blok2img1').attr('href', $('#meta16-' + qq).data('img'));
    });
    $('#block2kvar15').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met15').html($('#meta15-' + qq).data('id'));
        $('#blok3img').attr('src', $('#meta15-' + qq).data('img'));
        $('#blok3img1').attr('href', $('#meta15-' + qq).data('img'));
    });
    $('#block3kvar22').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met22').html($('#meta22-' + qq).data('id'));
        $('#blok3img').attr('src', $('#meta22-' + qq).data('img'));
        $('#blok3img1').attr('href', $('#meta22-' + qq).data('img'));
    });
    $('#block3kvar21').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met21').html($('#meta21-' + qq).data('id'));
        $('#blok3img').attr('src', $('#meta21-' + qq).data('img'));
        $('#blok3img1').attr('href', $('#meta21-' + qq).data('img'));
    });
    $('#block3kvar20').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met20').html($('#meta20-' + qq).data('id'));
        $('#blok3img').attr('src', $('#meta20-' + qq).data('img'));
        $('#blok3img1').attr('href', $('#meta20-' + qq).data('img'));
    });
    $('#block3kvar19').on('slid.bs.carousel', function (e) {
        var qq = e.to + 1;
        $('#met19').html($('#meta19-' + qq).data('id'));
        $('#blok3img').attr('src', $('#meta19-' + qq).data('img'));
        $('#blok3img1').attr('href', $('#meta19-' + qq).data('img'));
    });
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        if (e.target['hash'] == '#block1kv1') {
            // language=JQuery-CSS
            $('#met11').html($('#meta11-1').data('id'));
            $('#blok1img').attr('src', $('#meta11-1').data('img'));
            $('#blok1img1').attr('href', $('#meta11-1').data('img'));
        }
        if (e.target['hash'] == '#block1kv2') {
            $('#met12').html($('#meta12-1').data('id'));
            $('#blok1img').attr('src', $('#meta12-1').data('img'));
            $('#blok1img1').attr('href', $('#meta12-1').data('img'));
        }
        if (e.target['hash'] == '#block1kv3') {
            $('#met13').html($('#meta13-1').data('id'));
            $('#blok1img').attr('src', $('#meta13-1').data('img'));
            $('#blok1img1').attr('href', $('#meta13-1').data('img'));
        }
        if (e.target['hash'] == '#block1kv4') {
            $('#met14').html($('#meta14-1').data('id'));
            $('#blok1img').attr('src', $('#meta14-1').data('img'));
            $('#blok1img1').attr('href', $('#meta14-1').data('img'));
        }
        //e.relatedTarget  previous active tab

        if (e.target['hash'] == '#block2kv1') {
            $('#met18').html($('#meta18-1').data('id'));
            $('#blok2img').attr('src', $('#meta18-1').data('img'));
            $('#blok2img1').attr('href', $('#meta18-1').data('img'));
        }
        if (e.target['hash'] == '#block2kv2') {
            $('#met17').html($('#meta17-1').data('id'));
            $('#blok2img').attr('src', $('#meta17-1').data('img'));
            $('#blok2img1').attr('href', $('#meta17-1').data('img'));
        }
        if (e.target['hash'] == '#block2kv3') {
            $('#met16').html($('#meta16-1').data('id'));
            $('#blok2img').attr('src', $('#meta16-1').data('img'));
            $('#blok2img1').attr('href', $('#meta16-1').data('img'));
        }
        if (e.target['hash'] == '#block2kv4') {
            $('#met15').html($('#meta15-1').data('id'));
            $('#blok2img').attr('src', $('#meta15-1').data('img'));
            $('#blok2img1').attr('href', $('#meta15-1').data('img'));
        }
        //e.relatedTarget  previous active tab

        if (e.target['hash'] == '#block3kv1') {
            $('#met22').html($('#meta22-1').data('id'));
            $('#blok3img').attr('src', $('#meta22-1').data('img'));
            $('#blok3img1').attr('href', $('#meta22-1').data('img'));
        }
        if (e.target['hash'] == '#block3kv2') {
            $('#met21').html($('#meta21-1').data('id'));
            $('#blok3img').attr('src', $('#meta21-1').data('img'));
            $('#blok3img1').attr('href', $('#meta21-1').data('img'));
        }
        if (e.target['hash'] == '#block3kv3') {
            $('#met20').html($('#meta20-1').data('id'));
            $('#blok3img').attr('src', $('#meta20-1').data('img'));
            $('#blok3img1').attr('href', $('#meta20-1').data('img'));
        }
        if (e.target['hash'] == '#block3kv4') {
            $('#met19').html($('#meta19-1').data('id'));
            $('#blok3img').attr('src', $('#meta19-1').data('img'));
            $('#blok3img1').attr('href', $('#meta19-1').data('img'));
        }
    });

    $(".input_search").click(function () {
        $('#searchModal').modal(show);
    });
    $('#myTab a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
        $('.left-img').css('background', 'url(/wp-content/themes/vek-otau/assets/img/' + $(this).attr('id') + '.png)');
        if ($(this).attr('id') == 'tab-11-tab') {
            $('#zin1').data('id', 'tab-4');
            $('#zin1').data('tab', 'tab-41-tab');
            $('#zin2').data('id', 'tab-2');
            $('#zin2').data('tab', 'tab-21-tab');
			$('#left-img').removeAttr("data-fancybox");
			
        }
        if ($(this).attr('id') == 'tab-21-tab') {
            $('#zin1').data('id', 'tab-1');
            $('#zin1').data('tab', 'tab-11-tab');
            $('#zin2').data('id', 'tab-3');
            $('#zin2').data('tab', 'tab-41-tab');
			$('#left-img').removeAttr("data-fancybox");
        }
        if ($(this).attr('id') == 'tab-31-tab') {
            $('#zin1').data('id', 'tab-2');
            $('#zin1').data('tab', 'tab-21-tab');
            $('#zin2').data('id', 'tab-4');
            $('#zin2').data('tab', 'tab-41-tab');
			$('#left-img').attr("data-fancybox", "tab-41-tab").attr("href", '/wp-content/uploads/2018/05/qwedasdasd.jpg');
        }
        if ($(this).attr('id') == 'tab-41-tab') {
            $('#zin1').data('id', 'tab-3');
            $('#zin1').data('tab', 'tab-41-tab');
            $('#zin2').data('id', 'tab-1');
            $('#zin2').data('tab', 'tab-11-tab');
			$('#left-img').removeAttr("data-fancybox");
        }
    })
    $('#zin1').on('click', function (e) {
        e.preventDefault();
        $("#myTab a[href='#" + $(this).data('id') + "']").tab('show');
        if ($('#zin1').data('id') === 'tab-1') {
            $('#zin1').data('id', 'tab-4');
            $('#zin1').data('tab', 'tab-41-tab');
            $('#zin2').data('id', 'tab-2');
            $('#zin2').data('tab', 'tab-21-tab');
			$('#left-img').removeAttr("data-fancybox");
        } else if ($('#zin1').data('id') === 'tab-2') {
            $('#zin1').data('id', 'tab-1');
            $('#zin1').data('tab', 'tab-11-tab');
            $('#zin2').data('id', 'tab-3');
            $('#zin2').data('tab', 'tab-31-tab');
			$('#left-img').removeAttr("data-fancybox");
        } else if ($('#zin1').data('id') === 'tab-3') {
            $('#zin1').data('id', 'tab-2');
            $('#zin1').data('tab', 'tab-21-tab');
            $('#zin2').data('id', 'tab-4');
            $('#zin2').data('tab', 'tab-41-tab');
			$('#left-img').attr("data-fancybox", "tab-41-tab").attr("href", '/wp-content/uploads/2018/05/qwedasdasd.jpg');
        } else if ($('#zin1').data('id') === 'tab-4') {
            $('#zin1').data('id', 'tab-3');
            $('#zin1').data('tab', 'tab-31-tab');
            $('#zin2').data('id', 'tab-1');
            $('#zin2').data('tab', 'tab-11-tab');
			$('#left-img').removeAttr("data-fancybox");
        }
        $('.left-img').css('background', 'url(/wp-content/themes/vek-otau/assets/img/' + $(this).data('tab') + '.png)');
    })
    $('#zin2').on('click', function (e) {
        e.preventDefault();
        $("#myTab a[href='#" + $(this).data('id') + "']").tab('show');
        if ($('#zin2').data('id') === 'tab-1') {
            $('#zin1').data('id', 'tab-4');
            $('#zin1').data('tab', 'tab-41-tab');
            $('#zin2').data('id', 'tab-2');
            $('#zin2').data('tab', 'tab-21-tab');
			console.log($('#zin2').data('tab', 'tab-21-tab'));
			$('#left-img').removeAttr("data-fancybox");
        } else if ($('#zin2').data('id') === 'tab-2') {
            $('#zin1').data('id', 'tab-1');
            $('#zin1').data('tab', 'tab-11-tab');
            $('#zin2').data('id', 'tab-3');
            $('#zin2').data('tab', 'tab-31-tab');
			$('#left-img').removeAttr("data-fancybox");
        } else if ($('#zin2').data('id') === 'tab-3') {
            $('#zin1').data('id', 'tab-2');
            $('#zin1').data('tab', 'tab-21-tab');
            $('#zin2').data('id', 'tab-4');
            $('#zin2').data('tab', 'tab-41-tab');
			$('#left-img').attr("data-fancybox", "tab-41-tab").attr("href", '/wp-content/uploads/2018/05/qwedasdasd.jpg');
        } else if ($('#zin2').data('id') === 'tab-4') {
            $('#zin1').data('id', 'tab-3');
            $('#zin1').data('tab', 'tab-31-tab');
            $('#zin2').data('id', 'tab-1');
            $('#zin2').data('tab', 'tab-11-tab');
			$('#left-img').removeAttr("data-fancybox");
        }
        $('.left-img').css('background', 'url(/wp-content/themes/vek-otau/assets/img/' + $(this).data('tab') + '.png)');
    })

    if ($(window).width() < 400 ) {
        $("input.input_search").attr("placeholder","");
    }
    else { $("input.input_search").attr("placeholder","Поиск");}
});

$(function(){
  var hash = window.location.hash;
  hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show'); 
  $('ul.nav.nav-pills a').click(function (e) {
     $(this).tab('show');
     var scrollmem = $('body').scrollTop();
     window.location.hash = this.hash;
  });
});