<div class="ui top attached menu">
    <div class="ui icon item">
        @yield('navTable-icon')
    </div>
    <div class="item">
        @yield('navTable-titre')
    </div>
    <div class="right menu">
        <div class="ui right aligned category search item">
            <div class="ui transparent icon input">
                <input class="prompt" type="text" placeholder="Recherche...">
                <i class="search link icon"></i>
            </div>
            <div class="results"></div>
        </div>
        <div class="ui item">
            <button class="circular ui icon button green">
                <i class="icon add"></i>
            </button>
        </div>
    </div>
</div>
