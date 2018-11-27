hljs.initHighlightingOnLoad();

smoothScroll.init({
  speed: 200
});

Holder.addTheme("gray", {
  bg: "#BCBEC0",
  fg: "rgba(255, 255, 255, 1)",
  size: 12,
  fontweight: "normal"
});

$$('.viewsource').on('click', function () {
  var $this = $$(this);
  $this.parents('.doc-example').eq(0).toggleClass('doc-example-showcode');
});


(function () {
  var DEFAULT_PRIMARY = 'indigo';
  var DEFAULT_ACCENT = 'pink';
  var DEFAULT_LAYOUT = '';

  var setCookie = function (key, value) {
    // cookie æœ‰æ•ˆæœŸä¸º 1 å¹´
    var date = new Date();
    date.setTime(date.getTime() + 365*24*3600*1000);
    document.cookie = key + '=' + value + '; expires=' + date.toGMTString() + '; path=/';
  };

  var setDocsTheme = function (theme) {
    if (typeof theme.primary === 'undefined') {
      theme.primary = false;
    }
    if (typeof theme.accent === 'undefined') {
      theme.accent = false;
    }
    if (typeof theme.layout === 'undefined') {
      theme.layout = false;
    }

    var i, len;
    var $body = $$('body');

    var classStr = $body.attr('class');
    var classs = classStr.split(' ');

    if (theme.primary !== false) {
      for (i = 0, len = classs.length; i < len; i++) {
        if (classs[i].indexOf('mdui-theme-primary-') === 0) {
          $body.removeClass(classs[i])
        }
      }
      $body.addClass('mdui-theme-primary-' + theme.primary);
      setCookie('docs-theme-primary', theme.primary);
      $$('input[name="doc-theme-primary"][value="' + theme.primary + '"]').prop('checked', true);
    }

    if (theme.accent !== false) {
      for (i = 0, len = classs.length; i < len; i++) {
        if (classs[i].indexOf('mdui-theme-accent-') === 0) {
          $body.removeClass(classs[i]);
        }
      }
      $body.addClass('mdui-theme-accent-' + theme.accent);
      setCookie('docs-theme-accent', theme.accent);
      $$('input[name="doc-theme-accent"][value="' + theme.accent + '"]').prop('checked', true);
    }

    if (theme.layout !== false) {
      for (i = 0, len = classs.length; i < len; i++) {
        if (classs[i].indexOf('mdui-theme-layout-') === 0) {
          $body.removeClass(classs[i]);
        }
      }
      if (theme.layout !== '') {
        $body.addClass('mdui-theme-layout-' + theme.layout);
      }
      setCookie('docs-theme-layout', theme.layout);
      $$('input[name="doc-theme-layout"][value="' + theme.layout + '"]').prop('checked', true);
    }
  };

  $$(document).on('change', 'input[name="doc-theme-primary"]', function () {
    setDocsTheme({
      primary: $$(this).val()
    });
  });

  $$(document).on('change', 'input[name="doc-theme-accent"]', function () {
    setDocsTheme({
      accent: $$(this).val()
    });
  });

  $$(document).on('change', 'input[name="doc-theme-layout"]', function () {
    setDocsTheme({
      layout: $$(this).val()
    });
  });

  $$(document).on('cancel.mdui.dialog', '#dialog-docs-theme', function () {
    setDocsTheme({
      primary: DEFAULT_PRIMARY,
      accent: DEFAULT_ACCENT,
      layout: DEFAULT_LAYOUT
    });
  });
})();
//Fix
window.onload=function(){
  window.removeEventListener("mousewheel", this.forbidScroll);  
  window.removeEventListener("touchmove", this.forbidScroll, { passive: false });  
}  

console.log('%c LLSupport','font-size:4em;color:#00BFFF;','Copyright LLSupport(P.R.China / Singapura) 2015-2018');
console.log('%c 温馨提示：请不要调皮地在此粘贴执行任何内容,不然你的JJ可能不保 ！^_^','font-size:18px;');

console.log('LLSupport启动完成!');