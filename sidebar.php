<div class="span-5 prepend-1 last">
	<h4>2013 Campaign Progress</h4>
	<div class="progressBar">
		<?php
			// this is updated via variables in header.php
		?>
		<p class="progress" style="width:<?php echo number_format($progress, 2); ?>%;"><span class="small"><?php echo number_format($progress, 2) . "%"; echo ($progress >= 100)? "!" : ""; ?></span>&nbsp;</p>
	</div>

	<hr />
	<h4>Giving to UWAC</h4>
	<p class="serif italic">Give these to your employer to auto-deduct your donation from your paycheck.</p>
	<ul>
		<li><a href="/resources/uw-uwac-letter.pdf">University of Wyoming</a></li>
		<li><a href="/resources/acsd1.pdf">ACSD#1</a></li>
		<li><a href="/resources/ivinson.pdf">Ivinson Memorial Hospital</a></li>
		<li><a href="/resources/cityoflaramie.pdf">City of Laramie</a></li>
		<li><a href="/resources/generic-uwac-letter.pdf">Generic/Other</a></li>
	</ul>
	<hr />
	<p class="serif italic quiet">United Way of Albany County works to fund 14 local agencies which deliver aid
		within Albany County.</p>
	<hr/>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 'auto',
  height: '200px',
  theme: {
    shell: {
      background: '#dddddd',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#111111',
      links: '#0066cc'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('uwacwy').start();
</script>
<hr class="space" />
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FUnitedWayofAlbanyCounty&amp;width=190&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=300&amp;appId=210358175678540" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:300px;" allowTransparency="true"></iframe>
	<hr class="space" />
	<h4>Contact Us</h4>
	<p><strong>Phone</strong><br />
(307) 745-8643</p>
	<p><strong>Executive Director</strong><a href="mailto:pheimer@unitedwayalbanycounty.org"><br />
		Paul Heimer</a></p>
	<p><strong>Campaign Assistant</strong><br />
		<a href="mailto:bmundt@unitedwayalbanycounty.org">Barb Mundt</a></p>
	<p><strong>IT Intern</strong><br />
		<a href="mailto:bradkovach@unitedwayalbanycounty.org">Brad Kovach</a></p>
</div>
<!-- end .span-8 -->
