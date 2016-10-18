<!-- This file helps to put the script at the desired positon -->
<script type="text/javascript">
  var _x1 = _x1 || [];
  var _x2 = _x2 || {}; 
  _x2.account = '<?php echo $account_id ?>';
  
  (function() {
    var y = document.createElement('script');
    y.type = 'text/javascript';
    y.async = true; 
    y.src = 'cdn/sendx.io<?php echo $account_id ?>.js';
    var scripts = document.getElementsByTagName('script')[0];
    scripts.parentNode.insertBefore(y, scripts);
  })();
</script>




