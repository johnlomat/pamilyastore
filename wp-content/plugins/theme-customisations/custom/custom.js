jQuery(document).ready(function($){
	// Custom jQuery goes here
	var headerHeight = totalHeaderHeight(),
    stickyHeader = 'sticky-header',
    addStickyHeader = [
        '.storefront-primary-navigation',
        '.storefront-breadcrumb',
        '.site-header > div:first-child',
        '.home.page:not(.page-template-template-homepage)'
    ]

    function totalHeaderHeight() {
        let headerHeight = $('.site-header').innerHeight(),
            navigationHeight = $('.storefront-primary-navigation').innerHeight()

        return headerHeight - navigationHeight
    }

    $.each(addStickyHeader, function(key, value) {
        key++
        $(window).scroll(function() {
            if ($(window).scrollTop() >= headerHeight) {
                $(value).addClass(stickyHeader)
            } else {
                $(value).removeClass(stickyHeader)
            }
        })
        $(window).resize(function() {
            let headerHeight = totalHeaderHeight()
            $(window).scroll(function() {
                if ($(window).scrollTop() >= headerHeight) {
                    $(value).addClass(stickyHeader)
                } else {
                    $(value).removeClass(stickyHeader)
                }
            })
        })
    })
});