<div class="blog-post-teaser mb-4">
    <img
        class="img-fluid"
        src="$TeaserImage.Fill(484,314).Link()"
        srcset="$TeaserImage.Fill(484,314).Link() 484w,
                $TeaserImage.Fill(271,176).Link() 271w"
        sizes="(max-width: 767px) 484px,
               271px"
        alt=""
    >
    <div class="card-body">
        <span class="date">
            <span class="date-day">$Date.Format("d")</span>
            <span class="date-month">$Month</span>
            <span class="date-year">$Date.Format("Y")</span>
        </span>
        <h3 class="card-title"><a href="$Link">$TeaserTitle</a></h3>
        $TeaserText
    </div>
    <div class="card-footer">
        <a href="$Link" class="btn btn-transparent">
            <%t BlogPostTeaser.Btn "Mehr Erfahren" %> »
        </a>
    </div>
</div>
