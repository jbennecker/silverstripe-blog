<div class="container">
    <nav class="categoy-nav d-none d-sm-block">
        <% loop $BlogCategories %>
            <a class="link <% if $Top.currentCategorySlug == $URLSegment %>current<% end_if %>" href="$Link">
                $Title
            </a>
        <% end_loop %>
    </nav>


    <div class="row">
        <% loop $PaginatedBlogPosts %>
            <div class="col-12 col-lg-4">
                <% include BlogPostTeaser %>
            </div>
        <% end_loop %>
    </div>


    <nav class="pagination-nav">
        <% if $PaginatedBlogPosts.NotFirstPage %>
            <a class="link" href="$PaginatedBlogPosts.PrevLink">Vorherige Seite</a>
        <% end_if %>
        <% if $PaginatedBlogPosts.NotLastPage && $PaginatedBlogPosts.MoreThanOnePage %>
            <a class="link" href="$PaginatedBlogPosts.NextLink">Nächste Seite</a>
        <% end_if %>
    </nav>
</div>
