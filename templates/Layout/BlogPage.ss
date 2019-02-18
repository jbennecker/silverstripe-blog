<div class="blog-page">
    <div class="container">
        <div class="text-center">
            $Content
        </div>
    </div>

    <div class="container">
        <nav class="blog-page__categoy-nav d-none d-sm-block">
            <% loop $BlogCategories %>
                <a class="link <% if $Top.currentCategorySlug == $URLSegment %>is-active<% end_if %>" href="$Link">
                    $Title
                </a>
            <% end_loop %>
        </nav>
        <div class="blog-page__teaser-grid">
            <% loop $PaginatedBlogPosts %>
                <% include BlogPostTeaser %>
            <% end_loop %>
        </div>
        <nav class="blog-page__pager">
            <% if $PaginatedBlogPosts.NotFirstPage %>
                <a class="link" href="$PaginatedBlogPosts.PrevLink">
                    <%t BlogPage.Prev "« Vorherige Seite" %>
                </a>
            <% end_if %>
            <% if $PaginatedBlogPosts.NotLastPage && $PaginatedBlogPosts.MoreThanOnePage %>
                <a class="link" href="$PaginatedBlogPosts.NextLink">
                    <%t BlogPage.Next "Nächste Seite »" %>
                </a>
            <% end_if %>
        </nav>
    </div>
</div>
