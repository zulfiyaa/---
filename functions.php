add_filter('wp_nav_menu_items', function($items, $args) {
    if ($args->theme_location == 'secondary') {
        $search = '<li class="menu-item search-item-header" style="list-style: none; margin: 0 15px 0 0; padding: 0;">
            <form role="search" method="get" action="' . home_url('/') . '" style="margin: 0; padding: 0;">
                <input type="hidden" name="post_type" value="product">
                <div style="position: relative;">
                    <span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #511F73;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#511F73" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </span>
                    <input type="search" name="s" placeholder="Поиск"
                           style="border-radius: 30px; padding: 8px 12px 8px 38px; border: 2px solid #511F73; width: 200px; font-size: 13px; color: #511F73; outline: none; background: white;">
                </div>
            </form>
        </li>';