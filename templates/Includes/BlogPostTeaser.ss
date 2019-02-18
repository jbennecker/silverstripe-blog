<div class="blog-post-teaser mb-4">
    <img
        class="img-fluid"
        src="$TeaserImage.Fill(484,314).Link()"
        srcset="$TeaserImage.Fill(484,314).Link() 484w,
                $TeaserImage.Fill(369,207).Link() 369w"
        sizes="(max-width: 767px) 484px,
               369px"
        alt=""
    >
    <div class="blog-post-teaser__body">
        <span class="blog-post-teaser__date">$Date.Format("d.m.Y")</span>
        <h3 class="blog-post-teaser__title"><a href="$Link">$TeaserTitle</a></h3>
        $TeaserText
    </div>
    <div class="blog-post-teaser__footer">
        <a href="$Link" class="blog-post-teaser__more-btn">
            <%t BlogPostTeaser.Btn "Mehr Erfahren" %>
        </a>
    </div>
</div>
