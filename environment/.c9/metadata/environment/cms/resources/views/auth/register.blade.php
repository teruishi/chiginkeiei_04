{"filter":false,"title":"register.blade.php","tooltip":"/cms/resources/views/auth/register.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":16},"end":{"row":1,"column":4},"action":"insert","lines":["","    "],"id":2}],[{"start":{"row":1,"column":4},"end":{"row":13,"column":6},"action":"insert","lines":["@if (Route::has('login'))","    <div class=\"hidden fixed top-0 right-0 px-6 py-4 sm:block\">","        @auth","            <a href=\"{{ url('/dashboard') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Dashboard</a>","        @else","            <a href=\"{{ route('login') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Log in</a>","","            @if (Route::has('register'))","                <a href=\"{{ route('register') }}\" class=\"ml-4 text-sm text-gray-700 dark:text-gray-500 underline\">Register</a>","            @endif","        @endauth","    </div>","@endif"],"id":3}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["    "],"id":4},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":21},"end":{"row":17,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1696033341829,"hash":"d22d64ee4a444147af42c6349d63dbdf7d4a1762"}