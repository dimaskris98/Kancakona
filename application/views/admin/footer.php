
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> 

<script>
	function logout(){
		var log = confirm("Apakah anda yakin ingin keluar ?");
		if(log){
			location.href = "<?php echo base_url('Admin/logout') ?>";
		}
	}
</script>
</body>
</html>