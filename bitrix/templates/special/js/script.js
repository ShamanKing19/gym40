var displayConfig = {
      size: 'middle',
      color: 'white',
      showImage: 'img-yes',
      font: 'sans',
      interval: 'normal'
    },
    dcPosValue = [
      ['small', 'middle' ,'large'],
      ['white', 'black', 'blue'],
      ['img-yes', 'img-no'],
      ['sans','serif'],
      ['normal', 'medium', 'wide']
    ];


function setDisplayConfig() {
  $('body').attr('class',
    displayConfig['size']+' '+
	  displayConfig['color']+' '+
	  displayConfig['showImage']+' '+
	  displayConfig['font']+' '+
	  displayConfig['interval']
  );
  $.cookie('config', $.toJSON(displayConfig), {path: "/", expires: 100});
}

function activate() {
  // РђРєС‚РёРІРёСЂСѓРµРј СЂР°Р·РјРµСЂ С€СЂРёС„С‚Р°
  var pos = $.inArray(displayConfig['size'], dcPosValue[0]);
  if (pos != -1) {
    $('#fs-btn .fs-act').removeClass('fs-act');
    $('#fs-btn a').eq(pos).addClass('fs-act');
  }

  // РђРєС‚РёРІРёСЂСѓРµРј С†РІРµС‚РѕРІСѓСЋ СЃС…РµРјСѓ
  pos = $.inArray(displayConfig['color'], dcPosValue[1]);
  if (pos != -1) {
    $('#cs-btn .cs-act').removeClass('cs-act');
    $('#cs-btn a').eq(pos).addClass('cs-act');
  }

  // РђРєС‚РёРІРёСЂСѓРµРј РѕС‚РѕР±СЂР°Р¶РµРЅРёРµ РєР°СЂС‚РёРЅРѕРє
  if (displayConfig['showImage'] == 'img-no')
    $('#show-image').removeClass('si-check-act');

  // РђРєС‚РёРІРёСЂСѓРµРј С€СЂРёС„С‚
  pos = $.inArray(displayConfig['font'], dcPosValue[3]);
  if (pos != -1) {
    $('.sma-alt-param-btn').eq(0).children('span').removeClass('sma-alt-act');
    $('.sma-alt-param-btn').eq(0).children('span').eq(pos).addClass('sma-alt-act');
  }

  // РђРєС‚РёРІРёСЂСѓРµРј РёРЅС‚РµСЂРІР°Р»
  pos = $.inArray(displayConfig['interval'], dcPosValue[4]);
  if (pos != -1) {
    $('.sma-alt-param-btn').eq(1).children('span').removeClass('sma-alt-act');
    $('.sma-alt-param-btn').eq(1).children('span').eq(pos).addClass('sma-alt-act');
  }
}

$(document).ready(function(){
  $('input.calendar-field').mask('99.99.9999');
	ie6 = $.browser.msie && $.browser.version == 6;

  if ($.cookie('config') != null)
    displayConfig = $.evalJSON($.cookie('config'));
		//---
		setDisplayConfig();
    activate();

  // РѕСЃРЅРѕРІРЅРѕРµ РјРµРЅСЋ
  $('#menu:not(.not-sub-menu) li a').bind('click',
    function(){
    var self = $(this).parent();
	  if (!self.hasClass('menu-act')) {
	    $('#menu .menu-act').removeClass('menu-act');
        self.addClass('menu-act');
		$('#sub-menu ul.show').removeClass('show');
		$('#sub-menu ul').eq($('#menu li').index(self)).addClass('show')
	  }
    }
  );

    //клик по ссылки "Версия для слабовидящих"
    $('#norm_ver').click(function(){
        $('#target').submit();
    });

  // РїРѕРєР°Р·Р°С‚СЊ\СЃРєСЂС‹С‚СЊ РґРѕРї-РїР°СЂР°РјРµСЂС‚С‹ РІ РЅР°СЃС‚СЂРѕР№РєР°С… РІРЅ.РІРёРґР°
  $('#sma-alt-btn-show').live('click',
    function() {
	  $(this).hide();
	  $('#sma-alt')
	    .show()
	    .animate({'top': 0},
	      function() {
		    $('#sma-alt')
			  .css('overflow','visible')
			    .parent()
			      .css('z-index',13)
		  }
	    )
	}
  );
  $('#sma-alt>span').live('click',
    function() {
	  $('#sma-alt')
        .animate({'top': -160},
	      function() {
		    $('#sma-alt').hide();
			$('#sma-alt-btn-show').show()
		  }
	    )
		  .parent()
			.css('z-index',10);
	}
  );

  // РєРЅРѕРїРєРё РІ РґРѕРї-РїР°СЂР°РјРµСЂС‚С‹ РІ РЅР°СЃС‚СЂРѕР№РєР°С… РІРЅ.РІРёРґР°
  // font-size
  $('#fs-btn a').bind('click',
    function() {
	  if (!$(this).hasClass('fs-act')) {
	    $('#fs-btn .fs-act').removeClass('fs-act');
	    $(this).addClass('fs-act');

		//---
		displayConfig['size'] = dcPosValue[0][$('#fs-btn a').index(this)];
		setDisplayConfig()
        //---
	  }
	  return false;
	}
  );
  // color-scheme
  $('#cs-btn a').bind('click',
    function() {
	  if (!$(this).hasClass('cs-act')) {
	    $('#cs-btn .cs-act').removeClass('cs-act');
	    $(this).addClass('cs-act');
		if (ie6) {
		  $('#sma-alt>span')
		    .hide();
		  $('#sma-alt>span')
		    .eq($('#cs-btn a').index(this))
		      .show()
		}
		//---
		displayConfig['color'] = dcPosValue[1][$('#cs-btn a').index(this)];
		setDisplayConfig()
        //---
	  }
	}
  );
  // show/hide images
  $('#show-image').bind('click',
    function() {
	  $(this).toggleClass('si-check-act');

      //---
	  if ($(this).hasClass('si-check-act'))
	    displayConfig['showImage'] = dcPosValue[2][0];
	  else
	    displayConfig['showImage'] = dcPosValue[2][1];
	  setDisplayConfig();
	  return false;
      //---
	}
  );
    // clear filter
    $('#clear-filter').bind('click',
        function() {
            displayConfig['size'] = 'middle';
            displayConfig['color'] = 'white';
            displayConfig['showImage'] = 'img-no';
            displayConfig['font'] = 'sans';
            displayConfig['interval'] = 'normal';
            setDisplayConfig();
            activate();
            return false;
            //---
        }
    );
  // family&space РїР°СЂР°РјРµС‚СЂС‹
  $('#special-menu-alt .sma-alt-param-btn span').live('click',
    function() {
	  if (!$(this).hasClass('sma-alt-act')) {
	    var ind = $('#special-menu-alt span').index(this);

	    $('.sma-alt-act',$(this).parent()).removeClass('sma-alt-act');
		$(this).addClass('sma-alt-act');

		//---
		if (ind < 2)
	      displayConfig['font'] = dcPosValue[3][ind];
		else
	      displayConfig['interval'] = dcPosValue[4][ind-2];
		setDisplayConfig()
        //---
	  }
	}
  );

  // РєР°СЃС‚РѕРјРЅС‹Р№ input[type=file]
  $('.input-file .f-btn').click(
    function(){
	  $(this).next('input')
	  .trigger('click')
	  .trigger('change')
    }
  );
  $('.input-file input').change(
    function() {
	  $(this).trigger('blur');

    //var re = /([A-Za-z]\:\\)([^/]+[\\])([\s\w\.\-\_\:0-9Р°-СЏРђ-СЏ]+\.\w+)/;
    //var v = $(this).attr('value').replace(re, '$3');

	  $(this).parent().next('.input-file-res').html(v);
	}
  );

  // РѕС‚РєСЂС‹С‚СЊ/Р·Р°РєСЂС‹С‚СЊ С„РёР»СЊС‚СЂ С‚Р°Р±Р»РёС†С‹
  if ($('#content').hasClass('has-filter-table')) {
    $('.ft-toggle').live('click',
	  function() {
	    $(this).next().toggle();
		  $(this).parent().toggleClass('ft-open');
		  if (!$(this).parent().hasClass('active-select')) {
		    $('.filter-table select').selectbox();
			  $(this).parent().addClass('active-select')
		  }
	  }
	);
  };

  // РѕС‡РёСЃС‚РєР° С„РёР»СЊС‚СЂР° С‚Р°Р±Р»РёС†
  $('input.filter-clear').click(function()
  {
    var form = this.form;
    for(var i=0, n=form.elements.length; i<n; i++)
    {
        var el = form.elements[i];
        switch(el.type.toLowerCase())
        {
            case 'text':
            case 'textarea':
                el.value = '';
                break;
            case 'select-one':
                el.selectedIndex = 0;
                break;
            case 'select-multiple':
                for(var j=0, l=el.options.length; j<l; j++)
                    el.options[j].selected = false;
                break;
            case 'checkbox':
                el.checked = false;
                break;
            default:
                break;
        }
    }

    if ($(form).hasClass('no-empty'))
    {
        manualNoEmptySubmit($(form));
    }else{
        if(form.onsubmit)
            form.onsubmit();
        form.submit();
    }
  });

  /*~~~~~~~~~~ РїСЂРѕРїСѓСЃРє РїСѓСЃС‚С‹С… Р·РЅР°С‡РµРЅРёР№ РїСЂРё РѕС‚РїСЂР°РІРєРµ ~~~~~~~~~~~~~~~~~~~~*/
  manualNoEmptySubmit = function(form)
  {
    var data = form.serializeArray(), i, newData = {};
    for (i = 0; i < data.length; i++)
    {
      if (data[i].value != '')
        newData[data[i].name] = data[i].value;
    }
    var href = window.location.href;
    href = href.substr(0, href.lastIndexOf("?"));
    window.location = href + '?' + $.param(newData);
  }

  $('form.no-empty').live('submit', function(){
    manualNoEmptySubmit($(this));
    return false;
  });

  $('form.no-empty input[type=submit]').live('click', function(){
    manualNoEmptySubmit($(this.form));
    return false;
  });

  //РїР»Р°РІРЅС‹Р№ РїРµСЂРµС…РѕРґ РїРѕ СЃСЃС‹Р»РєР°Рј-СЏРєРѕСЂСЏРј
  if (!$.browser.opera)
    $('a[href*=#]').click(function() {

      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
          && location.hostname == this.hostname) {

          var $target = $(this.hash);
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

          if ($target.length) {
                 var slctr = $.browser.safari ? 'body' : 'html,body';
              var targetOffset = $target.offset().top;
              $(slctr).animate({scrollTop: targetOffset}, 500);
              $('a:first', $target).focus();
              return false;
          }
      }
    });

  // СЃРѕРєСЂС‹С‚РёРµ РїРѕР»РµР№ С„РѕСЂРјС‹
  var fieldId = $('input[name=radio]:radio:checked').val();
  if ($('input[name=radio]:radio').length > 0) activateFields(fieldId);

  $('input[name=radio]:radio').click(function() {
    fieldId = $(this).val();
    activateFields(fieldId);
  });

  // Р°РєС‚РёРІР°С†РёСЏ Рё РґРµР°РєС‚РёРІР°С†РёСЏ РїРѕР»РµР№ С„РѕСЂРјС‹
  function activateFields(fieldId) {
    $.each(arAllFields, function(i, n) {
      $('#' + n).show();
      $('#label_' + n).show();
    });
    $.each(objRadio[fieldId] ,function(i, n) {
      $('#' + n).hide();
      $('#label_' + n).hide();
    });
  };

});