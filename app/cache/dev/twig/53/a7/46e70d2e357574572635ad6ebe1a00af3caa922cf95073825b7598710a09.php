<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_53a746e70d2e357574572635ad6ebe1a00af3caa922cf95073825b7598710a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  42 => 12,  38 => 13,  26 => 3,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 29,  75 => 28,  72 => 16,  68 => 14,  56 => 9,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  112 => 42,  101 => 24,  69 => 25,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  33 => 6,  30 => 5,  176 => 62,  173 => 74,  169 => 14,  166 => 71,  159 => 11,  156 => 66,  151 => 63,  148 => 5,  130 => 71,  125 => 69,  117 => 44,  115 => 43,  111 => 59,  105 => 40,  102 => 55,  100 => 54,  97 => 53,  91 => 35,  88 => 6,  86 => 28,  64 => 12,  54 => 21,  50 => 15,  40 => 8,  35 => 7,  31 => 5,  23 => 1,  46 => 14,  43 => 8,  37 => 13,  32 => 6,  29 => 4,);
    }
}
