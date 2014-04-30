<?php $pageName = "Home"; ?>
<?php require('./header.php'); ?>
		<div class="span-20">
			<div class="span-6">
				<h2>Welcome to UWAC</h2>
				<ul>
					<li><a href="/agencies/">Learn about our agencies</a></li>
					<li><a href="/about/">Meet our Board of Directors</a></li>
					<li><a href="/contact/">Contact the United Way</a></li>
					<li><a href="/volunteer/">Volunteer with United Way</a></li>
				</ul>
				<a href="https://twitter.com/uwacwy" class="twitter-follow-button" data-show-count="false">Follow @uwacwy</a>
				<div class="fb-like" data-href="https://www.facebook.com/UnitedWayofAlbanyCounty" data-send="false" data-layout="button_count" data-width="230" data-show-faces="false" data-font="arial"></div>
				
		</div><!-- end .span-10 -->
			<div class="span-14 last">
				<img src="img/550_LIVE_UNITED.png" width="550" height="177" alt="UWAC - Live United &reg;" title="Live United &reg;"/>
			</div><!-- end .span-14 --> 
		</div><!-- end .span-24 -->
		<hr class="space" />
		<div class="span-20">
			

			<div class="span-14">
        <a href="resources/2013-annual-report.pdf"><img src="resources/2013-annual-report-thumb.png" class="left" style="margin: 0 18px 18px 0;"></a>
			   <h3>Read Our Annual Report</h3>
         <p>Includes a report from UWAC's executive director, Paul Heimer, as well as a budget breakdown of how we allocate Campaign donations</p>
         <p><a href="resources/2013-annual-report.pdf">Download now (1.5 MB, PDF)</a></p> 
			<hr>
<?php /*				<h3>Latest News</h3> */ ?>
			<h3>Campaign Results</h3>
				<table width="100%" border="1">
  <tr>
    <th>Year</th>
    <th>Campaign Chairs</th>
    <th>Goal</th>
    <th>Raised</th>
  </tr>
  <tr>
    <td>2000</td>
    <td>Kim &amp; Gary Negich</td>
    <td>313,100</td>
    <td>333,155</td>
  </tr>
  <tr>
    <td>2001</td>
    <td>Jane &amp; Paul Greaser</td>
    <td>315,000</td>
    <td>322,719</td>
  </tr>
  <tr>
    <td>2002</td>
    <td>Tom &amp; Maleta Mangan</td>
    <td>318,000</td>
    <td>323,109</td>
  </tr>
  <tr>
    <td>2003</td>
    <td>Oliver &amp; Sidney Walter</td>
    <td>321,000</td>
    <td>326,320</td>
  </tr>
  <tr>
    <td>2004</td>
    <td>Sam &amp; Jennifer Clark</td>
    <td>324,000</td>
    <td>327,084</td>
  </tr>
  <tr>
    <td>2005</td>
    <td>Jim &amp; Linda Cavalli</td>
    <td>327,000</td>
    <td>334,268</td>
  </tr>
  <tr>
    <td>2006</td>
    <td>Karen Saunders</td>
    <td>330,000</td>
    <td>351,265</td>
  </tr>
  <tr>
    <td>2007</td>
    <td>John &amp; Heidi Schutterle</td>
    <td>335,000</td>
    <td>376,672</td>
  </tr>
  <tr>
    <td>2008</td>
    <td>Allory &amp; Dawn Deiss</td>
    <td>350,000</td>
    <td>378,457</td>
  </tr>
  <tr>
    <td>2009</td>
    <td>Debra &amp; Bob Beck</td>
    <td>360,000</td>
    <td>362,084</td>
  </tr>
  <tr>
    <td>2010</td>
    <td>Jack &amp; Marge Bedessem</td>
    <td>371,000</td>
    <td>371,000</td>
  </tr>
  <tr>
    <td>2011</td>
    <td>Nancy &amp; Steve Stutzman</td>
    <td>375,000</td>
    <td>410,346</td>
  </tr>
	<tr>
		<td>2012</td>
		<td>Mary Burman &amp; Charles DeWolf</td>
		<td>400,125</td>
		<td>417,310</td>
	</tr>
  <tr>
    <td>2013</td>
    <td>Jay &amp; Betsy Bress</td>
    <td>420,000</td>
    <td><strong><?php echo number_format($progress/100 * $goal); ?></strong></td>
  </tr>
</table>
			</div><!-- end .span-14 -->
			<?php require('./sidebar.php'); ?>
		</div><!-- end .span-20 -->
<?php require('./footer.php'); ?>
