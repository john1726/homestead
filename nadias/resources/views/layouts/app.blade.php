<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LEDCA Calgary') }}@yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" href="/images/favicon.ico">  
</head>
<body>
        <div id="app" class="container">
            <div class="top-bar">
                <div>Call us at (123) 456-7891</div>
                <div><a href="#">get driving directions</a></div>
            </div>            
            <header>
                <a href="/"><img src="/images/logo.png"></a>
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="separator"></li>
                        <li><a href="#">About Us</a></li>
                        <li class="separator"></li>
                        <li><a href="/menu">Programs</a></li>
                        <li class="separator"></li>
                        <li><a href="#">Events</a></li>
                        <li class="separator"></li>
                        <li><a href="#">Information</a></li>
                        <li class="separator"></li>
                        <li><a href="#">Contact</a></li>
                        <li class="separator"></li>
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest                        
                    </ul>
                </nav>
            </header>  
            <main class="page-content">
                @yield('content')
            </main>    
            <footer>
                <div id="bottom-b_wrapper">
                    <div class="wrapper clearfix">
                        <section id="bottom-b" class="grid-block"><div class="grid-box width25 grid-h"><div class="module mod-box  deepest">
            
                    <h3 class="module-title"><span class="color">Contact</span> Information</h3>	
            <p><strong>Kenyan Canadian Association - KCA</strong><br>Brampton | Toronto<br>Ontario, Canada.<br>Tel: +1-888-448-6225<br>Email: <span id="cloak8b8c1008d4f007031f80a93cbdb55971"><a href="mailto:info@kcacanada.org">info@kcacanada.org</a></span><script type="text/javascript">
                            document.getElementById('cloak8b8c1008d4f007031f80a93cbdb55971').innerHTML = '';
                            var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                            var path = 'hr' + 'ef' + '=';
                            var addy8b8c1008d4f007031f80a93cbdb55971 = '&#105;nf&#111;' + '&#64;';
                            addy8b8c1008d4f007031f80a93cbdb55971 = addy8b8c1008d4f007031f80a93cbdb55971 + 'kc&#97;c&#97;n&#97;d&#97;' + '&#46;' + '&#111;rg';
                            var addy_text8b8c1008d4f007031f80a93cbdb55971 = '&#105;nf&#111;' + '&#64;' + 'kc&#97;c&#97;n&#97;d&#97;' + '&#46;' + '&#111;rg';document.getElementById('cloak8b8c1008d4f007031f80a93cbdb55971').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy8b8c1008d4f007031f80a93cbdb55971 + '\'>'+addy_text8b8c1008d4f007031f80a93cbdb55971+'<\/a>';
                    </script><br><a title="Find us n Facebook" href="https://www.facebook.com/kcacanada/" target="_blank" rel="noopener noreferrer"><img src="/images/Facebook-logo.jpg" width="25"></a>&nbsp;&nbsp; <a title="Follow us on Twitter" href="https://twitter.com/kcacanada/" target="_blank" rel="noopener noreferrer"><img src="/images/twitter-logo.jpg" width="30"></a>&nbsp;&nbsp;&nbsp;<a title="Find us on Instagram" href="https://www.instagram.com/kcacanada/" target="_blank" rel="noopener noreferrer"><img src="/images/instagram-logo.jpg" width="25"></a>&nbsp; &nbsp;&nbsp;<a title="Find us on Linkedin" href="#" target="_blank" rel="noopener noreferrer"><img src="/images/Linkedin-Logo.jpg" width="40"></a>&nbsp;|&nbsp;@kcacanada<br><br></p>		
            </div></div><div class="grid-box width25 grid-h"><div class="module mod-box  deepest">
            
                    <h3 class="module-title"><span class="color">KCA</span> Twitter </h3>	Twitter response: "Could not authenticate you."		
            </div></div><div class="grid-box width25 grid-h"><div class="module mod-box  deepest">
            
                    <h3 class="module-title"><span class="color">Join</span> KCA Newsletter</h3>		<div class="acym_module " id="acym_module_formAcym34311">
                    <div class="acym_fulldiv" id="acym_fulldiv_formAcym34311">
                        <form enctype="multipart/form-data" id="formAcym34311" name="formAcym34311" method="POST" action="/index.php/component/acym/frontusers?tmpl=component" onsubmit="return submitAcymForm('subscribe','formAcym34311', 'acymSubmitSubForm')">
                            <div class="acym_module_form">
                                
            <div class="acym_form">
                <div class="onefield fieldacy1 acyfield_text" id="field_1"><label class="cell margin-top-1"><span class="acym__users__creation__fields__title">Name</span><input name="user[name]" value="" data-authorized-content="{&quot;0&quot;:&quot;all&quot;,&quot;regex&quot;:&quot;&quot;,&quot;message&quot;:&quot;Incorrect value for the field Name&quot;}" type="text" class="cell  "><div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></label><div class="acym__field__error__block" data-acym-field-id="1"></div></div><div class="onefield fieldacy2 acyfield_text" id="field_2"><label class="cell margin-top-1"><span class="acym__users__creation__fields__title">Email</span><input id="email_field_175" name="user[email]" value="" data-authorized-content="{&quot;0&quot;:&quot;all&quot;,&quot;regex&quot;:&quot;&quot;,&quot;message&quot;:&quot;Incorrect value for the field Email&quot;}" required="" type="email" class="cell acym__user__edit__email  "></label><div class="acym__field__error__block" data-acym-field-id="2"></div></div></div>
            
            <p class="acysubbuttons">
            <noscript>
                Please enable the javascript to submit this form</noscript>
            <input type="button" class="btn btn-primary button subbutton" value="Subscribe" name="Submit" onclick="try{ return submitAcymForm('subscribe','formAcym34311', 'acymSubmitSubForm'); }catch(err){alert('The form could not be submitted '+err);return false;}">
            </p>
                            </div>
            
                            <input type="hidden" name="ctrl" value="frontusers">
                            <input type="hidden" name="task" value="notask">
                            <input type="hidden" name="option" value="com_acym">
            
                            
                            <input type="hidden" name="ajax" value="1">
                            <input type="hidden" name="successmode" value="replace">
                            <input type="hidden" name="acy_source" value="Module n°129">
                            <input type="hidden" name="hiddenlists" value="1">
                            <input type="hidden" name="fields" value="name,email">
                            <input type="hidden" name="acyformname" value="formAcym34311">
                            <input type="hidden" name="acysubmode" value="mod_acym">
                            <input type="hidden" name="confirmation_message" value="">
            
                                        </form>
                    </div>
                </div>
                    
            </div></div><div class="grid-box width25 grid-h"><div class="module mod-box  deepest">
            
                    <h3 class="module-title"><span class="color">Donate</span> NOW</h3>	
            <p><a href="/donate.php"><img src="/images/donate_button_png2.png" alt="" width="239" height="128"></a></p>		
            </div></div></section>
                    </div>
                </div>
            </footer>   
        </div>                    
</body>
</html>
