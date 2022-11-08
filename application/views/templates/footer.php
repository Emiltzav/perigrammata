        

	     
    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    
   
     <!-- google translate scripts -->
     <script type="text/javascript">
        function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                pageLanguage: 'el', 
                includedLanguages: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                
        }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 


    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>
    
    <!-- MDBootstrap Datatables  -->
    <!-- JQuery -->
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/datatables.min.js"></script>
    <!-- Table DND  -->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableDnD/0.9.1/jquery.tablednd.js" integrity="sha256-d3rtug+Hg1GZPB7Y/yTcRixO/wlI78+2m08tosoRn7A=" crossorigin="anonymous"></script> -->

        
    <!-- <script src = "node_modules/clientside-require/dist/bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/universal-sentence-encoder"></script>


    <script src="https://unpkg.com/compromise"></script>
    <script src="https://unpkg.com/compromise-numbers"></script>
   


    <script src="https://d3js.org/d3-color.v1.min.js"></script>
    <script src="https://d3js.org/d3-interpolate.v1.min.js"></script>
    <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/d3-scale-chromatic@1.5.0/dist/d3-scale-chromatic.min.js"></script>
    <script>

    </script> 


    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/courses.js"></script> 
    <!-- Admin results JavaScript -->
    <script src="<?php echo URL; ?>public/js/admin_results.js"></script> 
    <!-- Universal Sentence Encoder -->
    <script src="<?php echo URL; ?>public/js/universal_sentence_encoder.js"></script> 

</body>
</html>
