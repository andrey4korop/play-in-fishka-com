 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <!-- футер -->

  <!-- скрипты, незнаю что к чему но пох-->
<script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script><!-- джейквери-->
    <script src="<?=base_url(); ?>media/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>media/js/scroll/jquery.bxslider.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/tabs.js" type="text/javascript"></script> 
<script type="text/javascript">
    jQuery(window).load(function () {
        "use strict";
        $('#preloader').css('overflow', 'hidden');
        $('#status').css('overflow', 'hidden');
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(1000).fadeOut("slow");
    });
    </script>
        <script>
        $(document).ready(function () {
            "use strict";
            $('.slider1').bxSlider({
                slideWidth: 350,
                slideHeight: '100%',
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 10
            });
        });
    </script>
    <script src="<?=base_url(); ?>media/js/slideproject/jquery.flexslider.js" type="text/javascript"></script><!-- скрипт слайдера-->
     <script type="text/javascript">
         $(function () {SyntaxHighlighter.all();});
         $(window).load(function () {
             "use strict";
             $('.flexslider').flexslider({
                 animation: "slide",
                 start: function (slider) {
                     $('body').removeClass('loading');
                 }
             });
         });
  </script>
    <script src="<?=base_url(); ?>media/js/jquery.nav1.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/jquery.appear.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=base_url(); ?>media/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>	
    <script src="<?=base_url(); ?>media/js/screen.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shCore.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushXml.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushJScript.js" type="text/javascript"></script>
<!--Table Responsive -->
    <script src="<?=base_url(); ?>media/js/tableresp/tabscript.js" type="text/javascript"></script>
	<script type="text/javascript">
	    var sorter = new TINY.table.sorter('sorter', 'table', {
	        headclass: 'head',
	        ascclass: 'asc',
	        descclass: 'desc',
	        evenclass: 'evenrow',
	        oddclass: 'oddrow',
	        evenselclass: 'evenselected',
	        oddselclass: 'oddselected',
	        paginate: true,
	        size: 10,
	        colddid: 'columns',
	        currentid: 'currentpage',
	        totalid: 'totalpages',
	        startingrecid: 'startrecord',
	        endingrecid: 'endrecord',
	        totalrecid: 'totalrecords',
	        hoverid: 'selectedrow',
	        pageddid: 'pagedropdown',
	        navid: 'tablenav',
	        sortcolumn: 1,
	        sortdir: 1,
	        columns: [{ index: 7, format: '%', decimals: 1 }, { index: 8, format: '$', decimals: 0}],
	        init: true
	    });
  </script>
  <script type="text/javascript">
	    var sorter = new TINY.table.sorter('sorter', 'table1', {
	        headclass: 'head',
	        ascclass: 'asc',
	        descclass: 'desc',
	        evenclass: 'evenrow',
	        oddclass: 'oddrow',
	        evenselclass: 'evenselected',
	        oddselclass: 'oddselected',
	        paginate: true,
	        size: 10,
	        colddid: 'columns',
	        currentid: 'currentpage',
	        totalid: 'totalpages',
	        startingrecid: 'startrecord',
	        endingrecid: 'endrecord',
	        totalrecid: 'totalrecords',
	        hoverid: 'selectedrow',
	        pageddid: 'pagedropdown',
	        navid: 'tablenav',
	        sortcolumn: 1,
	        sortdir: 1,
	        columns: [{ index: 7, format: '%', decimals: 1 }, { index: 8, format: '$', decimals: 0}],
	        init: true
	    });
  </script>
</body>
</html>
