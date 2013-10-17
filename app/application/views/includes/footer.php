		<!-- content -->
		</div>
		
		<div id="footer" class="clearfix">
		
			<?php if( ! isset($error)) : ?>
		
				<p id="back-to-top"><span></span>Back to Top</p>
				
			<?php endif; ?>
		
			<p id="copy">&copy; <?= date('Y') ?> adampetrie.com. All rights reserved.</p>
			
		<!-- footer -->
		</div>

	<!-- conter-column -->
	</div>

	<div id="right-side-outer">
		<div id="right-side"></div>
	</div>
	
	<script type="text/javascript" src="<?= base_url('common/scripts/jquery-1.7.2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('common/scripts/form.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('common/scripts/ui.js') ?>"></script>
	
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-17593025-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	
	</script>

<!-- My American dream is to have it a little bit better than my parents ever had it -->
</body>
</html>